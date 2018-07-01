<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Arr;

class IndexController extends Controller
{
    //
    public function index ()
    {
        return view('index');
    }
}
