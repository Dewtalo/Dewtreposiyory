<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Nationality;
use App\Models\Language;
use App\Models\Place;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Nationality $nationality, Language $language, Place $place): View
    {
        
        return view('auth.register')->with(['nationalities' => $nationality->get(), 'languages' => $language->get(), 'places' => $place->get()]);
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'category' => $request->category,
            'gneder' => $request->gender,
            'birthdate' => $request->birthdate,
            'nationality_id' => $request->nationality,
            'about_me' => $request-> about_me,
            
        ]);
        $user->languages()->sync($request->language);
        $user->places()->sync($request->place);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
