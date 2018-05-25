<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the conference table
 * @note the structure is linked to the Conference model (app/Conference.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateConferenceTable
 * @version Audara 1.0
 * 
*/

class CreateConferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *  @note Create the conference table
     *  @note the foreign keys:
     *  @note conference_bridge_id -> referenced the conference_bridge table ->id
     *  @note conference_menu_id -> referenced the conference_menu table ->id
     *  @note conference_user_id -> referenced the conference_user table ->id
     */
    public function up()
    {
        Schema::create('conference', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('conference_bridge_id')->unsigned();
            $table->integer('conference_menu_id')->unsigned();
            $table->integer('conference_user_id')->unsigned();
            $table->string('number',45);

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');

            $table->foreign('conference_bridge_id')->references('id')->on('conference_bridge');

            $table->foreign('conference_menu_id')->references('id')->on('conference_menu');

            $table->foreign('conference_user_id')->references('id')->on('conference_user');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the conference table
     */
    public function down()
    {
        Schema::dropIfExists('conference');
    }
}
