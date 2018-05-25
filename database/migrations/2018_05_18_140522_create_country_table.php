<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the country table
 * @note the structure is linked to the Country model (app/Country.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateCountryTable
 * @version Audara 1.0
 * 
*/

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the country table
     */
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->string('id',10)->primary()->default('');
            $table->string('name',80);

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the country table
     */
    public function down()
    {
        Schema::dropIfExists('country');
    }
}
