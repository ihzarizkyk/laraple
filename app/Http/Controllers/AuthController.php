<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function login()
    {
        return view("auth.login");
    }

    public function postregister(Request $r)
    {
        $r->validate([
           "name" => "required",
           "email" => "required",
           "password" => "required" 
        ]);

        DB::table("users")->insert(
            [
                "name" => $r->name,
                "email" => $r->email,
                "password" => Hash::make($r->password)
            ]
        );

        return redirect("/login");
    }

    public function postlogin(Request $r)
    {
        $credentials = Auth::attempt(["email" => $r->email, "password" => $r->password]);

        if(!$credentials)
        {
            return redirect()->back();
        }else{
            return "success";
        }
    }

    public function logout(Request $r)
    {
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();
        return redirect("/login");
    }
}
