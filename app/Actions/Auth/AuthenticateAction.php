<?php declare(strict_types=1);

namespace App\Actions\Auth;

use Illuminate\Support\Facades\Auth;

class AuthenticateAction{

    /**
     * Constructor
     * @param string $guard = 'web'
     * @return void
     */
    public function __construct(private readonly string $guard = 'web')
    {
    }

    /**
     * Login users
     * @param array $data
     * @param bool $remember
     * @return bool
     */
    public function authenticate(array $data, ?bool $remember = null)
    {
        return Auth::guard($this->guard)->attempt($data, $remember);
    }

    /**
     * Logout users
     * @return Auth
     */
    public function logout()
    {
        return Auth::guard($this->guard)->logout();
    }

    /**
     * Get authenticated user
     * @return Auth
     */
    public function user()
    {
        return Auth::guard($this->guard)->user();
    }

}
