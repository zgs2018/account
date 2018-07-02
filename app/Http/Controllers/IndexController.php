<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Arr;

class IndexController extends Controller
{
    //
    public function index ()
    {
        return view('index');
    }

    public function detail ()
    {
        return view('detail');
    }


    public function test ()
    {
        $userModel          =   new User();
        $result             =   app()->make('router');

        dump( $result );
    }
}
