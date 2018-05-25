<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the network_measures table
 * @note the structure is linked to the Network_measure model (app/Network_measure.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateNetworkMeasuresTable
 * @version Audara 1.0
 * 
*/

class CreateNetworkMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the network_measures table
     */
    public function up()
    {
        Schema::create('network_measures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('panel_type',20);
            $table->string('panel_id',20);
            $table->date('log_date');
            $table->text('measures');
            $table->text('measure_dates');


            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the network_measures table
     */
    public function down()
    {
        Schema::dropIfExists('network_measures');
    }
}
