<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Actions\Auth\AuthenticateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    protected $action;


    public function __construct(protected string $guard = 'admin')
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
        $this->action = new AuthenticateAction($this->guard);
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
