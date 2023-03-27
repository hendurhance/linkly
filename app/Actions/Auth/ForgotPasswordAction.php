<?php declare(strict_types=1);

namespace App\Actions\Auth;

use App\Enums\UserTypeEnum;
use App\Helpers\Random;
use Illuminate\Support\Facades\DB;

class ForgotPasswordAction{

    public function execute(string $email, string $guard = 'web')
    {
        $genToken = Random::reset();
        DB::table('password_resets')->updateOrInsert(
            ['email' => $email, 'type' => $guard == 'admin' ? UserTypeEnum::ADMIN : UserTypeEnum::USER],
            ['token' => $genToken]
        );
    }


}