<?php declare(strict_types=1);


namespace App\Contracts\Admin\Auth;

interface ForgotPasswordRepositoryInterface
{
    public function handleForgotPassword(string $email);
}