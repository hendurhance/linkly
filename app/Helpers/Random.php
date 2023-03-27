<?php

namespace App\Helpers;

class Random
{

    

    public static function string(int $length = 10): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function number(int $length = 10)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function int(): int
    {
        return random_int(1000000000, 9999999999);
    }


    public static function alphaint(int $length = 10): string
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function browserify(int $length = 20): string
    {
        // Generate id from session, ip, browser agent, device type and browser type
        $session_id = session()->getId();
        $ip = request()->ip();
        $agent = request()->header('User-Agent');
        
        $id = $session_id . $ip . $agent;
        $id = hash('sha256', $id);
        $id = substr($id, 0, $length);
        return $id;
    }

    public static function bytes(int $length = 32): string
    {
        return base64_encode(random_bytes($length));
    }

    public static function reset(int $length = 60)
    {
        $token = self::string($length);
        return hash('sha256', $token);
    }
}
