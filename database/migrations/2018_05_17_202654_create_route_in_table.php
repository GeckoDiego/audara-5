<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the route_in table
 * @note the structure is linked to the Route_in model (app/Route_in.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateRouteInTable
 * @version Audara 1.0
 * 
*/

class CreateRouteInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the route_in table
     * @note the foreign keys:
     * @note context_id -> referenced the context table ->id
     */
    public function up()
    {
        Schema::create('route_in', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45);
            $table->integer('context_id')->unsigned(); 
            $table->string('type',3); 
            $table->string('pattern',200);
            $table->string('goto',45);   
            $table->string('manual',100);   
            $table->string('off_schedule',100); 
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');  
            
            $table->foreign('context_id')->references('id')->on('context');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the route_in table
     */
    public function down()
    {
        Schema::dropIfExists('route_in');
    }
}
