<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the conference_user table
 * @note the structure is linked to the Conference_user model (app/Conference_user.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateConferenceUserTable
 * @version Audara 1.0
 * 
*/

class CreateConferenceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the conference_user table
     */
    public function up()
    {
        Schema::create('conference_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',45)->default('user');
            $table->string('name',60);
            $table->enum('admin', array('yes','no'));
            $table->enum('marked', array('yes','no'));
            $table->enum('startmuted', array('yes','no'));
            $table->enum('music_on_hold_when_empty', array('yes','no'));
            $table->string('music_on_hold_class',100);
            $table->enum('quiet', array('yes','no'));
            $table->enum('announce_user_count', array('yes','no'));
            $table->enum('announce_user_count_all', array('yes','no'));
            $table->enum('announce_only_user', array('yes','no'));
            $table->enum('wait_marked', array('yes','no'));
            $table->enum('end_marked', array('yes','no'));
            $table->enum('dsp_drop_silence', array('yes','no'));
            $table->integer('dsp_talking_threshold');
            $table->integer('dsp_silence_threshold');
            $table->enum('talk_detection_events', array('yes','no'));
            $table->enum('denoise', array('yes','no'));
            $table->enum('jitterbuffer', array('yes','no'));
            $table->integer('pin');
            $table->enum('announce_join_leave', array('yes','no'));
            $table->enum('announce_join_leave_review', array('yes','no'));
            $table->enum('dtmf_passthrough', array('yes','no'));
            $table->text('announcement');
            $table->integer('timeout');

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the conference_user table
     */
    public function down()
    {
        Schema::dropIfExists('conference_user');
    }
}
