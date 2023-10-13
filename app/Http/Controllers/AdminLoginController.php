<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function loginAuth(Request $request)
    {
        $request->validate([
            'email'=>"required|email",
            "password"=>"required"
        ]);
        $credintials = array('email' => $request->email, 'password' => $request->password);

        if (Auth::guard('web')->attempt($credintials)) {
            return redirect('admin/dashboard');
        } else {
            return redirect('/');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
