<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the us_states table
 * @note the structure is linked to the Us_states model (app/Us_state.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateUsStatesTable
 * @version Audara 1.0
 * 
*/

class CreateUsStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the us_states table
     */
    public function up()
    {
        Schema::create('us_states', function (Blueprint $table) {
            $table->string('id',2)->primary()->default('');
            $table->string('name',45);
            $table->integer('zip_code');            

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the us_states table
     * 
     */
    public function down()
    {
        Schema::dropIfExists('us_states');
    }
}
