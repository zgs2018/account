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
            $table->integer('user_id')->comment('用户id');
            $table->string('realname','30')->default('')->comment('真实姓名');
            $table->string('nickname','60')->default('')->comment('用户昵称');
            $table->string('head_img','120')->default('')->comment('用户头像');
            $table->tinyInteger('age',false,true)->default(0)->comment('用户年龄');
            $table->tinyInteger('sex',false,true)->default(0)->comment('用户性别 1.男 0.女');
            $table->char('register_appid',32)->comment('注册来源程序id');
            $table->ipAddress('last_login_ip')->comment('用户最后一次登录ip');
            $table->timestamp('last_login_time',0)->comment('用户最后看一次登录时间');
            $table->tinyInteger('last_login_appid')->comment('最后一次登录来源程序id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
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
