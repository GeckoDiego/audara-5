<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the trunks table
 * @note the structure is linked to the Trunk model (app/Trunk.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateTrunksTable
 * @version Audara 1.0
 * 
*/

class CreateTrunksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the trunks table
     */
    public function up()
    {
        Schema::create('trunks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45)->default('');
            $table->string('tech_type',45);
            $table->string('channel',45);
            $table->enum('has_timer', array('yes','no'));
            $table->enum('has_blacklist', array('yes','no'));

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the trunks table
     */
    public function down()
    {
        Schema::dropIfExists('trunks');
    }
}
