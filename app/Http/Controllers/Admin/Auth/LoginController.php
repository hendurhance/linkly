<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
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

    /**
     * Handle login request
     * @param LoginRequest $request
     * @return \Illuminate\Http\Response
     */
    public function handleLogin(LoginRequest $request)
    {
        return $request->validated();
    }
}
