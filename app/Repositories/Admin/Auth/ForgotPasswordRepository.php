<?php declare(strict_types=1);

namespace App\Repositories\Admin\Auth;

use App\Contracts\Admin\Auth\ForgotPasswordRepositoryInterface;

class ForgotPasswordRepository implements ForgotPasswordRepositoryInterface
{

    /**
     * Handle forgot password request
     * @param string $email
     * @return 
     */
    public function handleForgotPassword(string $email)
    {
    }
    
}