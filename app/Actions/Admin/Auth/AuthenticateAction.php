<?php declare(strict_types=1);


namespace App\Actions\Admin\Auth;

use Illuminate\Support\Facades\Auth;

class AuthenticateAction{

    /**
     * Login admin users
     * @param array $data
     * @param bool $remember
     * @return bool
     */
    public function authenticate(array $data, ?bool $remember = null)
    {
        return Auth::guard('admin')->attempt($data, $remember);
    }

    /**
     * Logout admin users
     * @return Auth
     */
    public function logout()
    {
        return Auth::guard('admin')->logout();
    }

    /**
     * Get authenticated admin user
     * @return Auth
     */
    public function admin()
    {
        return Auth::guard('admin')->user();
    }

}