<?php declare(strict_types=1);

namespace App\Repositories\Admin\Auth;

use App\Actions\Auth\ForgotPasswordAction;
use App\Contracts\Admin\Auth\ForgotPasswordRepositoryInterface;

class ForgotPasswordRepository implements ForgotPasswordRepositoryInterface
{

    /**
     * Instantiate Action variable
     */
    private $action;


    public function __construct(ForgotPasswordAction $action, protected readonly string $guard = 'admin')
    {
        $this->action = $action;
    }
    /**
     * Handle forgot password request
     * @param string $email
     * @return 
     */
    public function handleForgotPassword(string $email)
    {
        $execute = $this->action->execute($email, $this->guard);
        return $execute;
    }
    
}