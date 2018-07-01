<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class IndexController extends Controller
{
    //
    public function index ()
    {
        $userModel      =   new User();

        dump( Str::uuid()->getHex() ) ;
    }
}
