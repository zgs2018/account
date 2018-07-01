<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    //
    public $table               =   'users';

    public $primaryKey          =   'user_id';

    protected $fillable         =   [
        'openid', 'email', 'mobile', 'password', 'register_appid',
    ];

    public $hidden              =   [
        'password','remember_token'
    ];

    public function profile ()
    {
        return $this->hasOne(UserProfile::class, 'user_id','user_id');
    }
}
