<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the voicemail table
 * @note the structure is linked to the Voicemail model (app/Voicemail.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateVoicemailTable
 * @version Audara 1.0
 * 
*/

class CreateVoicemailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the voicemail table
     */
    public function up()
    {
        Schema::create('voicemail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mailbox',11)->default('0');
            $table->string('password',10)->default('0');
            $table->string('fullname',10)->default('');
            $table->string('email',120);
            $table->string('pager',50);
            $table->string('attach',10)->default('yes');
            $table->string('saycid',10)->default('yes');
            $table->string('hidefromdir',10)->default('yes');
            $table->timestamp('stamp')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->string('email_tmp',50);            
            
            
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the voicemail table
     */
    public function down()
    {
        Schema::dropIfExists('voicemail');
    }
}
