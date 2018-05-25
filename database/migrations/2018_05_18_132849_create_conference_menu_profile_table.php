<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the conference_menu_profile table
 * @note the structure is linked to the Conference_menu_profile model (app/Conference_menu_profile.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateConferenceMenuProfileTable
 * @version Audara 1.0
 * 
*/

class CreateConferenceMenuProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the conference_menu_profile table
     * @note the foreign keys:
     * @note conference_menu_id -> referenced the conference_menu table ->id
     * @note conference_menu_parameter_id -> referenced the conference_menu_parameters table ->id
     */
    public function up()
    {
        Schema::create('conference_menu_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('conference_menu_parameter_id')->unsigned();
            $table->integer('conference_menu_id')->unsigned();
            $table->string('digit_code',45); 
            
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->foreign('conference_menu_id')->references('id')->on('conference_menu');

            $table->foreign('conference_menu_parameter_id')->references('id')->on('conference_menu_parameters');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the conference_menu_profile table
     */
    public function down()
    {
        Schema::dropIfExists('conference_menu_profile');
    }
}
