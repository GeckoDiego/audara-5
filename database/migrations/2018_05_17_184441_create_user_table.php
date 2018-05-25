<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the user table
 * @note the structure is linked to the User model (app/User.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateUserTable
 * @version Audara 1.0
 * 
*/

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the user table
     * @note the foreign keys:
     *     @note role_id -> referenced the role table ->id
     *     @note uctool_id -> referenced the uctool table ->id
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->integer('uctool_id')->unsigned(); 
            $table->string('username',60);
            $table->string('password',120);
            $table->string('name',45);
            $table->string('email',120);
            $table->string('address',250);
            $table->string('country_id',10);
            $table->string('city_id',10);
            $table->string('phone_home',20);
            $table->string('phone_mobile',20);
            $table->string('phone_business',20);
            $table->text('picture');
            $table->string('position',50);
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');

            $table->foreign('role_id')->references('id')->on('role');

            $table->foreign('uctool_id')->references('id')->on('uctool');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the user table
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}