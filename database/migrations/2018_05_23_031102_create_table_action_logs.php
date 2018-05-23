<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableActionLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_user_id')->comment('用户id');
            $table->string('route',255)->comment('操作路径');
            $table->string('method',50)->comment('操作方式');
            $table->string('ip',50)->comment('操作ip');
            $table->text('description')->comment('操作日志');
            $table->timestamps();
            $table->comment = '操作日志';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('action_logs');
    }
}
