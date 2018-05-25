<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the dialplan_extension table
 * @note the structure is linked to the Dialplan_extension model (app/Dialplan_extension.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateDialplanExtensionTable
 * @version Audara 1.0
 * 
*/

class CreateDialplanExtensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the dialplan_extension table
     */
    public function up()
    {
        Schema::create('dialplan_extension', function (Blueprint $table) {
            $table->increments('id');
            $table->string('priority',45);
            $table->string('app_name',50);
            $table->string('appdata',45);
            $table->integer('order_id');
            $table->string('send_to',100);
            $table->text('send_to_parameters');

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the dialplan_extension table
     */
    public function down()
    {
        Schema::dropIfExists('dialplan_extension');
    }
}
