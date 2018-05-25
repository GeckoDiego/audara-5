<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Iax_device table model
 * @note Based on the structure of the iax_device table  (database/migrations/2018_05_18_121012_create_voicemail_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Iax_device
 * @version Audara 1.0
*/

class Iax_device  extends Model{

	protected $table = 'iax_device';
	protected $primaryKey = 'id';
	protected $fillable = ['id','type', 'language','bandwidth','disallow','allow',
						'jitterbuffer','maxjitterbuffer','maxjitterinterps','resyncthreshold',
						'jittertargetextra','trunkmaxsize','trunkmtu','trunkfreq','trunktimestamps',
						'acl','keyrotate','description','sendani', 'mask','connectedline','minregexpire',
						'maxregexpire','authdebug', 'tos','cos','mailboxdetail','regcontext','codecpriority',
						'host','auth','secret','inkeys','outkey','setvar','callerid','deny','permit',
						'encryption','mailbox','qualify','qualifysmoothing','qualifyfreqok','qualifyfreqnotok',
						'peercontext','defaultip','trunk', 'timezone','callgroup','pickupgroup',
						'port','username','regexten','requirecalltoken','dbsecret','transfer','mohinterpret',
						'mohsuggest','status'];
       


}
