<?php

namespace App\Models;

class UserProfile extends Base
{
    //
    public $table               =   'users_profile';

    public $primaryKey          =   'user_id';

    protected $guarded          =   [

    ];

    public function user ()
    {
        return $this->belongsTo(User::class,'user_id','user_id');
    }
}
