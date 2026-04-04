<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Contracts\ExpertRepositoryInterface;

class FrontendController extends Controller
{
    protected $expertRepo;
    protected $articleRepo;
    protected $faqRepo;
    protected $settingRepo;
    protected $messageRepo;
    protected $categoryRepo;
    protected $tagRepo;

    public function __construct(
        ExpertRepositoryInterface $expertRepo,
        \App\Repositories\Contracts\ArticleRepositoryInterface $articleRepo,
        \App\Repositories\Contracts\FaqRepositoryInterface $faqRepo,
        \App\Repositories\Contracts\SettingRepositoryInterface $settingRepo,
        \App\Repositories\Contracts\MessageRepositoryInterface $messageRepo,
        \App\Repositories\Contracts\CategoryRepositoryInterface $categoryRepo,
        \App\Repositories\Contracts\TagRepositoryInterface $tagRepo
    ) {
        $this->expertRepo = $expertRepo;
        $this->articleRepo = $articleRepo;
        $this->faqRepo = $faqRepo;
        $this->settingRepo = $settingRepo;
        $this->messageRepo = $messageRepo;
        $this->categoryRepo = $categoryRepo;
        $this->tagRepo = $tagRepo;
    }

    public function index()
    {
        $experts = $this->expertRepo->getActiveExpertsForFrontpage(4);
        $articles = $this->articleRepo->getLatestArticles(3);
        $faqSetting = $this->faqRepo->getFirstFaq();
        return view('pages.index', compact('experts', 'articles', 'faqSetting'));
    }

    public function services()
    {
        return view('pages.services');
    }

    public function about()
    {
        $experts = $this->expertRepo->getFounders();
        return view('pages.about', compact('experts'));
    }

    public function experts(Request $request)
    {
        $search = $request->input('search');
        $position = $request->input('position');
        $experts = $this->expertRepo->filterActiveExperts($search, $position);
        $positions = $this->expertRepo->getPositions();
        return view('pages.expert', compact('experts', 'positions'));
    }

    public function expertDetail(string $slug)
    {
        $expert = $this->expertRepo->getBySlug($slug);
        return view('pages.expert-detil', compact('expert'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service_interest' => 'required|string|max:255',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'budget' => 'nullable|string|max:255',
            'timeline' => 'nullable|string|max:255',
            'how_did_you_hear' => 'nullable|string|max:255',
        ]);

        $message = $this->messageRepo->createMessage($validated);

        // Send email
        $contactEmail = $this->settingRepo->getFirstSetting();
        $toEmail = 'kapabel.indonesia@gmail.com'; // Fallback
        if ($contactEmail && is_array($contactEmail->properties)) {
            foreach ($contactEmail->properties as $prop) {
                if ($prop['key'] == 'contact_email' && isset($prop['is_active']) && $prop['is_active']) {
                    $toEmail = $prop['value'];
                }
            }
        }

        $mailContent = "New message from: {$validated['full_name']} \n";
        $mailContent .= "Email: {$validated['email']} \n";
        $mailContent .= "Phone: " . ($validated['phone'] ?? '-') . "\n";
        $mailContent .= "Company: " . ($validated['company'] ?? '-') . "\n";
        $mailContent .= "Service Interest: {$validated['service_interest']} \n";
        $mailContent .= "Budget: " . ($validated['budget'] ?? '-') . "\n";
        $mailContent .= "Timeline: " . ($validated['timeline'] ?? '-') . "\n";
        $mailContent .= "How did you hear about us?: " . ($validated['how_did_you_hear'] ?? '-') . "\n\n";
        $mailContent .= "Message: \n{$validated['message']}";

        \Illuminate\Support\Facades\Mail::raw(
            $mailContent, 
            function ($mail) use ($toEmail, $validated) {
                $mail->to($toEmail)
                     ->subject('New Contact Inquiry: ' . $validated['service_interest']);
            }
        );

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function blog(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');
        $tag = $request->input('tag');
        
        $articles = $this->articleRepo->filterActiveArticles($search, $category, $tag);
        $categories = $this->categoryRepo->getCategoriesWithArticleCount();
        $tags = $this->tagRepo->getTagsWithArticles();
        
        return view('pages.blog', compact('articles', 'categories', 'tags'));
    }

    public function article(string $slug)
    {
        $article = $this->articleRepo->getBySlug($slug);
        return view('pages.blog-detil', compact('article'));
    }
}
