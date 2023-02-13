<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        
    }


    /**
     * Show login form
     * 
     */
    public function login()
    {
        return view('admin.auth.login');
    }

    public function forgotPassword()
    {
        return view('admin.auth.forgot-password');
    }
}
