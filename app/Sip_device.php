<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Sip_device table model
 * @note Based on the structure of the Sip_device table  (database/migrations/2018_05_17_203431_create_sip_device_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Sip_device
 * @version Audara 1.0
 * @note the foreign keys:
 * @note context_id -> referenced the context table ->id
*/

class Sip_device  extends Model{

	protected $table = 'sip_device';
	protected $primaryKey = 'id';
	protected $fillable = ['id','name','context_id','type','callingpres','permit','deny',
							'secret','md5secret','remotesecret','transport','dtmfmode',
							'directmedia','nat','callgroup','pickupgroup','language',
							'allow','disallow','autoframing','insecure','trustrpid',
							'trust_id_outbound', 'progressinband','promiscredir', 'useclientcode', 
							'accountcode','callerid','amaflags','callcounter','busylevel','allowoverlap',
							'allowsubscribe', 'allowtransfer','ignoresdpversion', 'subscribecontext',
							'videosupport', 'maxcallbitrate','rfc2833compensate', 'mailbox','session_timers', 
							'session_expires','session_minse','session_refresher', 't38pt_usertpsource',
							'regexten','fromdomain','fromuser','host','port','qualify', 'keepalive',
							'defaultip','defaultuser','rtptimeout','rtpholdtimeout','sendrpid','outboundproxy',
							'callbackextension','timert1','timerb','qualifyfreq','contactpermit','contactdeny',
							'contactacl','directmediapermit','directmediadeny','directmediaacl','unsolicited_mailbox',
							'use_q850_reason', 'maxforwards','encryption','description','dtlsenable', 'dtlsverify',
							'dtlsrekey','dtlscertfile','dtlsprivatekey','dtlscipher','dtlscafile','dtlscapath',
							'dtlssetup', 'setvar','template','usereqphone', 'vmexten','ignore_requested_pref'];

}
