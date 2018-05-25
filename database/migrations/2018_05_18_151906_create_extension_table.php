<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the extension table
 * @note the structure is linked to the Extension model (app/Extension.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateExtensionTable
 * @version Audara 1.0
 * 
*/

class CreateExtensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the extension table
     * @note the foreign keys:
     * @note call_context_id -> referenced the call_context table ->id
     * @note conference_id -> referenced the conference table ->id
     * @note context_id -> referenced the context table ->id
     * @note dialplan_extension_id -> referenced the dialplan_extension table ->id
     * @note iax_device_id -> referenced the iax_device table ->id
     * @note sip_device_id -> referenced the sip_device table ->id
     * @note user_id -> referenced the user table ->id
     * @note voicemail_id -> referenced the voicemail table ->id
     * 
     */
    public function up()
    {
        Schema::create('extension', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exten',20);
            $table->string('name',60);
            $table->enum('type', array('service','device'));
            $table->integer('context_id')->unsigned();
            $table->integer('dialplan_extension_id')->unsigned();
            $table->integer('sip_device_id')->unsigned();
            $table->integer('iax_device_id')->unsigned();
            $table->integer('call_context_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('voicemail_id')->unsigned();
            $table->integer('conference_id')->unsigned();
            $table->string('out_callerid',20);
            $table->string('pinset',8);
            $table->double('timer_in', 8, 2)->default('0');
            $table->double('timer_out', 8, 2)->default('0');
            $table->enum('call_recording', array('NONE','IN','OUT','ALL'));
            $table->string('forward_busy',12);
            $table->enum('forward_external', array('YES','NO'));
            $table->string('forward_noanswer',12);
            $table->integer('simultaneous_calls')->default('2');
            $table->string('language',60);
            $table->string('send_to',10);
            $table->text('send_to_parameters');
            $table->timestamp('register_date')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->foreign('call_context_id')->references('id')->on('call_context');

            $table->foreign('conference_id')->references('id')->on('conference');

            $table->foreign('context_id')->references('id')->on('context');

            $table->foreign('dialplan_extension_id')->references('id')->on('dialplan_extension');

            $table->foreign('iax_device_id')->references('id')->on('iax_device');

            $table->foreign('sip_device_id')->references('id')->on('sip_device');

            $table->foreign('user_id')->references('id')->on('user');

            $table->foreign('voicemail_id')->references('id')->on('voicemail');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *  @note Remove the extension table
     */
    public function down()
    {
        Schema::dropIfExists('extension');
    }
}
