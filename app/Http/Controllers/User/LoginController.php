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

    public function check($q = "")
    {
        $result = "";
        if (trim($q) !== "") {
            $list = User::where('email', 'like', '%' . $q . '%')->get();

            if (count($list) != 0){
                $result = "Email đã được sử dụng";
            }
        }
        return response()->json(['result' => $result]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('login');
    }
}
