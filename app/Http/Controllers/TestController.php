<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Illuminate\Support\Facades\Auth;

class TestController extends BaseController {

    public function test()
    {
        $someModel = new User;


        $something = $someModel->find(1);
        print_r(Auth::user()->email);exit;
        return $something;
    }

    public function logout() {
        Auth::logout();
    }

}