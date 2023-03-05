<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Actions\Admin\Auth\AuthenticateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    protected $action;

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
        $this->action = new AuthenticateAction();
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
        $url = session()->get('url.intended') ?? route('admin.dashboard.index');
        $authenticate = $this->action->authenticate($request->validated(), $request->remember);
        return $authenticate ? redirect()->intended($url) : redirect()->back()->with('error', 'Invalid credentials, please try again.');
    }

    /**
     * Handle admin logout
     * 
     * @return Auth
     */
    public function logout()
    {
        return Auth::guard('admin')->logout();
    }
}
