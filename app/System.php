<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note System table model
 * @note Based on the structure of the system table  (database/migrations/2018_05_18_145950_create_system_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package System
 * @version Audara 1.0
*/

class System  extends Model{

	protected $table = 'system';
	protected $primaryKey = 'id';
	protected $fillable = ['id','dial_ytimer','dial_ztimer','dial_ringtime','meetme_prefix','hold_time','max_hold_calls',
							'max_call_timer','uip_ip','uip_port','default_country','default_language','max_hold_calls_dis',
							'dpbx','uip','ccip','ccs','use_fax','smtp_activate','smtp_host','smtp_port','smtp_username',
							'smtp_password','smtp_ttlsauth','faxmail_activate','faxmail_from','faxmail_subject','faxmail_message',
							'change_pinset','dip_maxconfig','dip_maxactive','operator_exten','insurance','support','encrypt_user',
							'currency','fax_trunk','dial_options','csv_delimiter','migrated','monitor_format','status'];


}
