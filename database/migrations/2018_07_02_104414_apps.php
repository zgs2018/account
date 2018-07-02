<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Apps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->increments('id');
            $table->char('appkey',32)->defalut('')->comment('项目标识key');
            $table->string('domain',30)->defalut('')->comment('项目域名');
            $table->string('sign',20)->defalut('')->comment('项目标识字符串');
            $table->string('name',60)->defalut('')->comment('项目名称');
            $table->string('desc',60)->defalut('')->comment('项目描述');
            $table->string('logout_uri')->defalut('logout')->comment('注销地址');
            $table->timestamps();

            $table->unique('appkey');
            $table->unique('sign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
