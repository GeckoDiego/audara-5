<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the city table
 * @note the structure is linked to the City model (app/City.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateCityTable
 * @version Audara 1.0
 * 
*/

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the city table
     * @note the foreign keys:
     *     @note country_id -> referenced the country table ->id
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->string('id',15)->primary()->default('');
            $table->string('country_id',10);
            $table->string('name',80);

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->foreign('country_id')->references('id')->on('country');

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
        Schema::dropIfExists('city');
    }
}
