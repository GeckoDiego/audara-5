<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the conference_bridge table
 * @note the structure is linked to the Conference_bridge model (app/Conference_bridge.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateConferenceBridgeTable
 * @version Audara 1.0
 * 
*/

class CreateConferenceBridgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the conference_bridge table
     */
    public function up()
    {
        Schema::create('conference_bridge', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',45)->default('bridge');
            $table->string('name',60);
            $table->integer('max_members');
            $table->string('record_file',200);
            $table->string('internal_sample_rate',100);
            $table->integer('mixing_interval');
            $table->enum('video_mode', array('none','follow_talker','last_marked','first_marked'));
            $table->string('language',45);
            $table->integer('regcontext');
            $table->string('sound_join',200);
            $table->string('sound_leave',200);
            $table->string('sound_has_joined',200);
            $table->string('sound_has_left',200);
            $table->string('sound_kicked',200);
            $table->string('sound_muted',200);
            $table->string('sound_unmuted',200);
            $table->string('sound_only_person',200);
            $table->string('sound_only_one',200);
            $table->string('sound_there_are',200);
            $table->string('sound_other_in_party',200);
            $table->string('sound_place_into_conference',200);
            $table->string('sound_wait_for_leader',200);
            $table->string('sound_leader_has_left',200);
            $table->string('sound_get_pin',200);
            $table->string('sound_invalid_pin',200);
            $table->string('sound_locked',200);
            $table->string('sound_locked_now',200);
            $table->string('sound_unlocked_now',200);
            $table->string('sound_error_menu',200);
            $table->string('sound_begin',200);

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the conference_bridge table
     */
    public function down()
    {
        Schema::dropIfExists('conference_bridge');
    }
}
