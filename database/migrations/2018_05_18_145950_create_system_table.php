<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the system table
 * @note the structure is linked to the System model (app/System.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateSystemTable
 * @version Audara 1.0
 * 
*/

class CreateSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the system table
     */
    public function up()
    {
        Schema::create('system', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('dial_ytimer')->default('0');
            $table->tinyInteger('dial_ztimer');
            $table->tinyInteger('dial_ringtime')->default('0');
            $table->tinyInteger('meetme_prefix')->default('0');
            $table->integer('hold_time')->default('5');
            $table->integer('max_hold_calls')->default('0');
            $table->integer('max_call_timer')->default('0');
            $table->string('uip_ip',16)->default('192.168.10.18');
            $table->integer('uip_port')->default('3729');
            $table->string('default_country',3)->default('COL');
            $table->string('default_language',10)->default('es');
            $table->integer('max_hold_calls_dis')->default('20');
            $table->string('dpbx',3)->default('yes');
            $table->string('uip',3)->default('no');
            $table->string('ccip',3)->default('no');
            $table->string('ccs',3)->default('no');
            $table->string('use_fax',3)->default('no');
            $table->string('smtp_activate',3)->default('no');
            $table->string('smtp_host',100);
            $table->string('smtp_port',4)->default('25');
            $table->string('smtp_username',40);
            $table->string('smtp_password',20);
            $table->string('smtp_ttlsauth',3)->default('no');
            $table->string('faxmail_activate',3)->default('no');
            $table->string('faxmail_from',60);
            $table->string('faxmail_subject',60);
            $table->text('faxmail_message');
            $table->string('change_pinset',3)->default('yes');
            $table->integer('dip_maxconfig')->default('25');
            $table->integer('dip_maxactive')->default('25');
            $table->integer('operator_exten')->default('100');
            $table->date('insurance');
            $table->date('support');
            $table->string('encrypt_user',3)->default('no');
            $table->string('currency',10)->default('$');
            $table->integer('fax_trunk');
            $table->string('dial_options',100)->default('t,T');
            $table->string('csv_delimiter',3)->default(';');
            $table->string('migrated',3)->default('no');
            $table->string('monitor_format',3)->default('gsm');


            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the system table
     */
    public function down()
    {
        Schema::dropIfExists('system');
    }
}
