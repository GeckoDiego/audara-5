<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the route_out table
 * @note the structure is linked to the Route_out model (app/Route_out.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateRouteOutTable
 * @version Audara 1.0
 * 
*/

class CreateRouteOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the route_out table
     */
    public function up()
    {
        Schema::create('route_out', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45);
            $table->text('description');
            $table->integer('context_id');
            $table->string('pattern',20);
            $table->string('prefix',10);
            $table->integer('splice');
            $table->string('activate_pin',3);
            $table->string('emergency',3);
            $table->string('callerid',20);            

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the route_out table
     */
    public function down()
    {
        Schema::dropIfExists('route_out');
    }
}
