<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $user = new User;

        $user->name = $request->input('inputName0');
        $user->email = $request->input('inputEmail0');
        $user->password = bcrypt($request->input('inputPassword0'));
        $user->address = $request->input('inputAddress0');
        $user->phone_number = $request->input('inputPhoneNumber0');
        $user->role_id = 3;

        if ($user->save()) {
            return redirect('login')->with('success', 'Đăng ký thành công, vui lòng đăng nhập!!');
        } else {
            return redirect('login')->with('fail', 'Đăng ký thất bại, vui lòng nhập lại thông tin!!');
        }


    }
}
