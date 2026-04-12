<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register-new');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'account_type' => ['required', 'in:client,expert'],
            'phone' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        if ($request->account_type === 'client') {
            $user->assignRole('Client');
            \App\Models\Client::create([
                'user_id' => $user->id,
                'slug' => \Illuminate\Support\Str::slug($request->company_name),
                'company_name' => $request->company_name ?? 'N/A',
                'company_email' => $request->email,
                'company_phone' => $request->phone,
                'position' => $request->position ?? 'Staff',
                'company_industry' => $request->company_industry ?? 'Other',
            ]);
        } elseif ($request->account_type === 'expert') {
            $user->assignRole('Consultant');
            \App\Models\Expert::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'email' => $request->email,
                'slug' => \Illuminate\Support\Str::slug($request->name),
                'position' => $request->expertise ?? 'Expert Consultant',
                'bio' => '-',
                'photo' => '-',
                'expertise' => $request->expertise,
                'linkedin' => $request->linkedin,
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
