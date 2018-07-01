<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id')->comment('用户自增id');
            $table->char('openid',32)->comment('用户唯一识别openid');
            $table->string('email',120)->comment('用户邮件');
            $table->string('mobile',20)->comment('用户手机号码');
            $table->string('password',120)->comment('用户密码');
            $table->tinyInteger('status',false)->default(1)->comment('用户状态');
            $table->rememberToken()->default('')->comment('remember_me token');
            $table->timestamps();

            $table->primary(['user_id','openid']);
            $table->unique('email');
            $table->unique('mobile');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
