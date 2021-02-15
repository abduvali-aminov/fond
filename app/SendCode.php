<?php

namespace App;

class SendCode
{
    public static function sendCode($phone){
        $code = rand(11111,99999);
        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'+'. (int) $phone,
            'from'=>'Test',
            'text'=>'Verify Code: '.$code,
        ]);
        return $code;
    }
}
