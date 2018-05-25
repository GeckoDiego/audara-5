<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the sip_device table
 * @note the structure is linked to the Sip_device model (app/Sip_device.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateSipDeviceTable
 * @version Audara 1.0
 * 
*/

class CreateSipDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the sip_device table
     * @note the foreign keys:
     * @note context_id -> referenced the context table ->id
     */
    public function up()
    {
        Schema::create('sip_device', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('context_id')->unsigned(); 
            $table->enum('type', array('friend','peer','user'));
            $table->string('callingpres',45);     
            $table->string('permit',45);     
            $table->string('deny',45);     
            $table->string('secret',45);     
            $table->text('md5secret');   
            $table->string('remotesecret',45);  
            $table->enum('transport', array('udp','tcp','tls','udp,tcp'))->default('udp');  
            $table->enum('dtmfmode', array('rfc2833','auto','inband','info','shortinfo'));   
            $table->enum('directmedia', array('yes','nonat','update','outgoing')); 
            $table->string('nat',45);
            $table->string('callgroup',45);
            $table->string('pickupgroup',45);
            $table->string('language',45);  
            $table->string('allow',200);  
            $table->string('disallow',200);    
            $table->enum('autoframing', array('yes','no')); 
            $table->enum('insecure', array('port','invite','port,invite')); 
            $table->enum('trustrpid', array('yes','no')); 
            $table->enum('trust_id_outbound', array('yes','no','legacy')); 
            $table->enum('progressinband', array('yes','no','never')); 
            $table->enum('promiscredir', array('yes','no')); 
            $table->enum('useclientcode', array('yes','no')); 
            $table->string('accountcode',45);
            $table->string('callerid',100);
            $table->string('amaflags',45);
            $table->enum('callcounter', array('yes','no'));
            $table->integer('busylevel');
            $table->enum('allowoverlap', array('yes','no','dtmf')); 
            $table->enum('allowsubscribe', array('yes','no')); 
            $table->enum('allowtransfer', array('yes','no')); 
            $table->enum('ignoresdpversion', array('yes','no')); 
            $table->string('subscribecontext',45);
            $table->enum('videosupport', array('yes','no'));
            $table->integer('maxcallbitrate');
            $table->enum('rfc2833compensate', array('yes','no'));
            $table->string('mailbox',45);
            $table->enum('session_timers', array('originate','accept','refuse'));
            $table->integer('session_expires');
            $table->integer('session_minse');
            $table->enum('session_refresher', array('uas','uac'));
            $table->enum('t38pt_usertpsource', array('yes','no'));
            $table->string('regexten',45);
            $table->string('fromdomain',100);
            $table->string('fromuser',45);
            $table->string('host',45);
            $table->integer('port');
            $table->enum('qualify', array('yes','no'));
            $table->integer('keepalive');
            $table->string('defaultip',45);
            $table->string('defaultuser',45);
            $table->integer('rtptimeout');
            $table->integer('rtpholdtimeout');
            $table->string('sendrpid',45);
            $table->string('outboundproxy',45);
            $table->string('callbackextension',45);
            $table->integer('timert1');
            $table->integer('timerb');
            $table->integer('qualifyfreq');
            $table->string('contactpermit',45);
            $table->string('contactdeny',45);
            $table->string('contactacl',45);
            $table->string('directmediapermit',45);
            $table->string('directmediadeny',45);
            $table->string('directmediaacl',45);
            $table->string('unsolicited_mailbox',45);
            $table->enum('use_q850_reason', array('no','yes'));
            $table->integer('maxforwards');
            $table->enum('encryption', array('no','yes'));
            $table->string('description',200);
            $table->enum('dtlsenable', array('no','yes'));
            $table->enum('dtlsverify', array('no','yes'));
            $table->integer('dtlsrekey');
            $table->string('dtlscertfile',100);
            $table->string('dtlsprivatekey',100);
            $table->string('dtlscipher',100);
            $table->string('dtlscafile',100);
            $table->string('dtlscapath',100);
            $table->enum('dtlssetup', array('active','passive','actpass'));
            $table->string('setvar',45);
            $table->string('template',45);
            $table->enum('usereqphone', array('yes','no'));
            $table->string('vmexten',45);
            $table->string('ignore_requested_pref',45);
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 

            $table->foreign('context_id')->references('id')->on('context');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the sip_device table
     */
    public function down()
    {
        Schema::dropIfExists('sip_device');
    }
}
