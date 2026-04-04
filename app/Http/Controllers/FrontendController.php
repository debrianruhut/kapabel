<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Contracts\ExpertRepositoryInterface;

class FrontendController extends Controller
{
    protected $expertRepo;
    protected $articleRepo;

    public function __construct(
        ExpertRepositoryInterface $expertRepo,
        \App\Repositories\Contracts\ArticleRepositoryInterface $articleRepo
    ) {
        $this->expertRepo = $expertRepo;
        $this->articleRepo = $articleRepo;
    }

    public function index()
    {
        $experts = $this->expertRepo->getActiveExpertsForFrontpage(4);
        $articles = $this->articleRepo->getLatestArticles(3);
        return view('pages.index', compact('experts', 'articles'));
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

    public function blog(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');
        $tag = $request->input('tag');
        
        $articles = $this->articleRepo->filterActiveArticles($search, $category, $tag);
        $categories = \App\Models\Category::has('articles')->withCount('articles')->get();
        $tags = \App\Models\Tag::has('articles')->get();
        
        return view('pages.blog', compact('articles', 'categories', 'tags'));
    }

    public function article(string $slug)
    {
        $article = $this->articleRepo->getBySlug($slug);
        return view('pages.blog-detil', compact('article'));
    }
}
