<?php

namespace App\Http\Controllers\User;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = new User;

            $user->name = $request->input('inputName0');
            $user->email = $request->input('inputEmail0');
            $user->password = bcrypt($request->input('inputPassword0'));
            $user->address = $request->input('inputAddress0');
            $user->phone_number = $request->input('inputPhoneNumber0');
            $user->role_id = 3;

            $user->save();

            DB::commit();
            return redirect('login')->with('success', 'Đăng ký thành công, vui lòng đăng nhập!!');
        } catch (QueryException $e) {
            DB::rollBack();
            return redirect('login')->with('fail', 'Đăng ký thất bại, vui lòng nhập lại thông tin!!');
        }
    }


    public function check(Request $request)
    {
        $result = true;
        if (trim($request->get('mail')) !== "") {
            $list = User::where('email', 'like', '%' . $request->get('mail') . '%')->get();

            if (count($list) != 0){
                $result = false;
            }
        }
        return response()->json(['result' => $result]);
    }
}
