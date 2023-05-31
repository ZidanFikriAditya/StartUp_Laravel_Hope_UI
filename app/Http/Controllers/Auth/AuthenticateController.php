<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function indexLogin(){
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return redirect()->back()->withErrors('Login Gagal');
    }
}
