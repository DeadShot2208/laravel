<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home() {
        return view('pages.home', [
        ]);
    }

    public function katalog() {
        return view('pages.katalog', [
        ]);
    }

    public function kontact() {
        return view('pages.kontact', [
        ]);
    }

    public function info() {
        return view('pages.info', [
        ]);
    }

    public function profile() {
        return view('pages.profile', [
        ]);
    }

    public function login() {
        return view('pages.login', [
        ]);
    }


    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect('index');
        }
    }
}
