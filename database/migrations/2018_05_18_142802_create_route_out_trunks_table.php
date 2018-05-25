<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the route_out_trunks table
 * @note the structure is linked to the Route_out_trunk model (app/Route_out_trunk.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateRouteOutTrunksTable
 * @version Audara 1.0
 * 
*/

class CreateRouteOutTrunksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the route_out_trunks table
     */
    public function up()
    {
        Schema::create('route_out_trunks', function (Blueprint $table) {
            $table->increments('route_out_id');
            $table->integer('trunks_id');
            $table->integer('priority');
            $table->integer('splice');
            $table->string('out_prefix',20);
            $table->unique('trunks_id');

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the route_out_trunks table
     */
    public function down()
    {
        Schema::dropIfExists('route_out_trunks');
    }
}
