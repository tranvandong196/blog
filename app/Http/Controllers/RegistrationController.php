<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        // Validation form

        $this->validate(request(), [
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|confirmed'
        ]);


        // Create and save the user.

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);


        // Sign them in.

        auth()->login($user);


        Mail::to($user)->send(new Welcome($user));

        // Redirect to home page.
        return redirect()->home();
    }
}
