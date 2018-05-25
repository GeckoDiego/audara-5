<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the dialplan_vaw table
 * @note the structure is linked to the Dialplan_vaw model (app/Dialplan_vaw.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateDialplanVawTable
 * @version Audara 1.0
 * 
*/

class CreateDialplanVawTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the user table
     * @note the foreign keys:
     * @note context_id -> referenced the context table ->id
     * 
     */
    public function up()
    {
        Schema::create('dialplan_vaw', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('context_id')->unsigned(); 
            $table->string('exten',15); 
            $table->string('priority',45);  
            $table->string('app_name',60);   
            $table->text('app_data');    
            $table->integer('order_id');   
            $table->integer('queue_id');  
            $table->text('app_parameters');     
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');
            
            $table->foreign('context_id')->references('id')->on('context');

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
        Schema::dropIfExists('dialplan_vaw');
    }
}
