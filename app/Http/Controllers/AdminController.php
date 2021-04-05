<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function getLogin() {
        return view('backend.login');
    }


    public function postLogin(Request $request) {
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if($request->remember_me = 'Remember Me'){
            $remember = true;
        }else{
            $remember = false;
        }

        if(Auth::attempt($arr, $remember)) {
            return redirect()->intended('admin');

        }
        else {
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu không đúng');
        }

    }
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('login');
    }

    public function getRegister() {
        return view('backend.register');
    }

    public function postRegister(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->password =bcrypt($request->password);
        $user->email = $request->email;
        $user->phone =($request->phone);

        $user->save();

        if($user->id) {

            return redirect()->intended('login')->with('success', 'Thao tác thành công');;
        }
        return redirect()->back();

    }

        
    //
}
