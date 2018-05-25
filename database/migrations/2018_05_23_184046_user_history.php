<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('username');
            $table->string('action');
            $table->ipAddress('ip_address');
            $table->string('computer_name');
            $table->string('os');
            $table->string('os_session_name');
            $table->string('user_agent');
            $table->dateTime('last_login_at')->nullable();
            $table->dateTime('last_logout_at')->nullable();
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_history');
    }
}
