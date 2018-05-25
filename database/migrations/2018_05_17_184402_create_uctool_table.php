<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the uctool table
 * @note the structure is linked to the Uctool model (app/Uctool.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateUctoolTable
 * @version Audara 1.0
*/

class CreateUctoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the uctool table
     */
    public function up()
    {
        Schema::create('uctool', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('chat_available', array('YES', 'NO'))->default('NO');
            $table->enum('call_recording', array('YES', 'NO'))->default('NO');
            $table->enum('conf_recording', array('YES', 'NO'))->default('NO');
            $table->enum('visible_in_directory', array('YES', 'NO'))->default('YES');
            $table->enum('call_restriction_uctool_close', array('YES', 'NO'))->default('NO');
            $table->enum('call_nopinset_uctool_open', array('YES', 'NO'))->default('NO');
            $table->enum('web_notify_with_activity', array('YES', 'NO'))->default('YES');
            $table->enum('forward_noanswer_action', array('VOICEMAIL','OPERATOR','EXTEN'));
            $table->string('forward_noanswer_exten',45)->default('2');
            $table->integer('maximun_hold_calls');            
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the uctool table
     */
    public function down()
    {
        Schema::dropIfExists('uctool');
    }
}
