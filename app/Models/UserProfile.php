<?php

namespace App\Models;

class UserProfile extends Base
{
    //
    public $table               =   'users_profile';

    public $primaryKey          =   'user_id';

    protected $guarded          =   [

    ];
}
