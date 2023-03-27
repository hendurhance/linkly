<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Contracts\Admin\Auth\ForgotPasswordRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\ForgotPasswordRequest;
use App\Repositories\Admin\Auth\ForgotPasswordRepository;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{

    public function __construct(protected ForgotPasswordRepository $repository = new ForgotPasswordRepository())
    {
        $this->middleware('guest:admin');
    }

    public function forgotPassword()
    {
        return view('admin.auth.forgot-password');
    }

    public function handleForgotPassword(ForgotPasswordRequest $request)
    {
        return $this->repository->handleForgotPassword($request->email);
    }
}
