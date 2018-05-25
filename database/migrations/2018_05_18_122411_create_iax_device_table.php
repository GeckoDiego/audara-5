<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the iax_device table
 * @note the structure is linked to the Iax_device model (app/Iax_device.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateIaxDeviceTable
 * @version Audara 1.0
 * 
*/

class CreateIaxDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the iax_device table
     */
    public function up()
    {
        Schema::create('iax_device', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', array('user','peer','friend'))->default('friend');
            $table->string('language',20);
            $table->string('bandwidth',6);
            $table->string('disallow',100);
            $table->string('allow',100);
            $table->enum('jitterbuffer', array('yes','no'));
            $table->integer('maxjitterbuffer');
            $table->integer('maxjitterinterps');
            $table->integer('resyncthreshold');
            $table->integer('jittertargetextra');
            $table->integer('trunkmaxsize');
            $table->integer('trunkmtu');
            $table->integer('trunkfreq');
            $table->enum('trunktimestamps', array('yes','no'));
            $table->string('acl',45);
            $table->enum('keyrotate', array('on','off'));
            $table->text('description');
            $table->enum('sendani', array('yes','no'));
            $table->string('mask',45);
            $table->enum('connectedline', array('yes','no','send','receive'));
            $table->integer('minregexpire');
            $table->integer('maxregexpire');
            $table->enum('authdebug', array('yes','no'));
            $table->string('tos',11);
            $table->string('cos',45);
            $table->string('mailboxdetail',6);
            $table->integer('regcontext');
            $table->enum('codecpriority', array('caller','host','disabled','reqonly'));
            $table->string('host',31)->default('');
            $table->string('auth',20);
            $table->string('secret',80);
            $table->string('inkeys',80);
            $table->string('outkey',80);
            $table->string('setvar',100);
            $table->string('callerid',80);
            $table->string('deny',95);
            $table->string('permit',95);
            $table->enum('encryption', array('yes','no'));
            $table->string('mailbox',50);
            $table->enum('qualify', array('yes','no'));
            $table->enum('qualifysmoothing', array('yes','no'));
            $table->integer('qualifyfreqok');
            $table->integer('qualifyfreqnotok');
            $table->integer('peercontext');
            $table->string('defaultip',15);
            $table->enum('trunk', array('yes','no'));
            $table->string('timezone',80);
            $table->string('callgroup',10);
            $table->string('pickupgroup',10);
            $table->integer('port');
            $table->string('username',80);
            $table->string('regexten',80);
            $table->enum('requirecalltoken', array('yes','no'));
            $table->text('dbsecret');
            $table->enum('transfer', array('yes','no','mediaonly'));
            $table->string('mohinterpret',45);
            $table->string('mohsuggest',45);

            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *  @note Remove the iax_device table
     * 
     */
    public function down()
    {
        Schema::dropIfExists('iax_device');
    }
}
