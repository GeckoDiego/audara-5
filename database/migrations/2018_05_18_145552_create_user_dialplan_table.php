<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the user_dialplan table
 * @note the structure is linked to the User_dialplan model (app/User_dialplan.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateUserDialplanTable
 * @version Audara 1.0
 * 
*/

class CreateUserDialplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the user_dialplan table
     */
    public function up()
    {
        Schema::create('user_dialplan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exten',20);
            $table->string('priority',45);
            $table->string('app_name',50);
            $table->string('appdata',45);
            $table->integer('order_id');

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the user_dialplan table
     */
    public function down()
    {
        Schema::dropIfExists('user_dialplan');
    }
}
