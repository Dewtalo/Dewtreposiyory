<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Language;
use App\Models\Place;
use App\Models\User;

class ProfileController extends Controller
{
    
    public function show()
    {
        $user=Auth::user();
        $user->load('nationality', 'languages', 'places');
        return view('profile.show', ['user' => $user]);
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request, Language $language, Place $place): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
            'languages' => $language->get(), 'places' => $place->get()
        ]);
    }  
    
    public function delete($language_id, $user_id)
    {
        $user = User::find($user_id);
        $user->languages()->detach($language_id);
        return redirect('profile/edit'); 
    }
    
    public function update_language(Request $request)
    {
        //dd($request->all());
        $input_language = $request['language'];
        //dd($input_language);
    Auth::user()->languages()->attach($input_language);
    return redirect('profile/edit');
    }
    
    public function update_about_me(Request $request, User $user)
    {
        $user['about_me'] = $request['about_me'];
        //$input_about_me = $request['user'];
        $user->save();
    
        return redirect('/profile/edit');
    }


    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
