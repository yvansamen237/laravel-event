<?php

namespace App\Http\Controllers;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function showlogin()
    {
        return view("user.login");
    }

    public function showRegister()
    {
        return view("user.register");
    }

    public function register(Request $request)
    {

        $user = new User();
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->save();
        return back();

    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            Toastr::error('Veillez verifier tous les champs', '', ["positionClass" => "toast-top-right"]);
            return back();
        }
        if (\Auth::attempt($request->only('username', 'password'))) {
            if (\Auth::check()) {
                Toastr::su('Veillez verifier tous les champs', '', ["positionClass" => "toast-top-right"]);

                return redirect("/admin");
            }
        } else {
            return redirect()->back()->withInput($request->all());
        }

    }

    public function logout()
    {
        Auth::guard()->logout();
        session()->invalidate();
        return back();
    }
}
