<?php

namespace App\Schedule;

use Illuminate\Support\Facades\Log;

class SendPaymentNotice{

    function __construct()
    {

    }

    function sendPaymentNotice()
    {
        Log::info('this is test for monthly payment notice schedule task');
    }
}