<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = [
            'email' => $request->input('inputEmail'),
            'password' => $request->input('inputPassword'),
        ];

        if (Auth::attempt($data)){
            $request->session()->put('name', Auth::user()->name);
            $request->session()->put('user_id', Auth::id());
            return redirect('index');
        } else{
            return redirect('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('index');
    }
}
