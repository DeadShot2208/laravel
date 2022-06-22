<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ValidateUserRequest;
use App\Http\Requests\ValidateLoginRequests;


class RegisterController extends Controller
{


    public function register(ValidateUserRequest $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $check_password = $request->input('check_password');


        if ($password != $check_password) {

            return redirect()->back()->withErrors(["message", "Пароли не совпадают!"]);

        }

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        return redirect(route('login'));

    }


    public function login(ValidateLoginRequests $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(["email" => $email,
            "password" => $password])) {
            return redirect(route('profile'));

        }

        return redirect()->back();
    }


    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->intended(route('home'));
    }

}
