<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_profile', function (Blueprint $table) {
            $table->integer('user_id',false,true)->comment('用户id');
            $table->string('realname','30')->default('')->comment('真实姓名');
            $table->string('nickname','60')->default('')->comment('用户昵称');
            $table->string('head_img','120')->default('')->comment('用户头像');
            $table->tinyInteger('age',false,true)->default(0)->comment('用户年龄');
            $table->tinyInteger('sex',false,true)->default(0)->comment('用户性别 1.男 0.女');
            $table->integer('city',false,true)->default(0)->comment('用户所在城市');
            $table->string('address','300')->default('')->comment('详细地址');
            $table->string('motto',300)->default('')->comment('用户座右铭');
            $table->ipAddress('last_login_ip')->default('')->comment('用户最后一次登录ip');
            $table->timestampTz('last_login_time')->nullable()->comment('用户最后看一次登录时间');
            $table->char('last_login_appid',32)->default('')->comment('最后一次登录来源程序id');
            $table->timestampsTz();

            $table->primary('user_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_profile');
    }
}
