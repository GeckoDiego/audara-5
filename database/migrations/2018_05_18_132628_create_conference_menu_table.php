<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the conference_menu table
 * @note the structure is linked to the Conference_menu model (app/Conference_menu.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateConferenceMenuTable
 * @version Audara 1.0
 * 
*/

class CreateConferenceMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the conference_menu table
     */
    public function up()
    {
        Schema::create('conference_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',45)->default('menu');
            $table->string('name',60);
            $table->string('playback',100);
            $table->string('playback_and_continue',45);


            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the conference_menu table
     */
    public function down()
    {
        Schema::dropIfExists('conference_menu');
    }
}
