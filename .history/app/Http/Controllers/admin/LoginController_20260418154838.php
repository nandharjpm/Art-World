<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin(){
        dd(1);
        return view('admin.login.login_page');
    }
}
