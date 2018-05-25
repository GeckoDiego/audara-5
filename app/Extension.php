<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Extension table model
 * @note Based on the structure of the extension table  (database/migrations/2018_05_18_151906_create_extension_table.php)
 * @note the foreign keys:
 * @note call_context_id -> referenced the call_context table ->id
 * @note conference_id -> referenced the conference table ->id
 * @note context_id -> referenced the context table ->id
 * @note dialplan_extension_id -> referenced the dialplan_extension table ->id
 * @note iax_device_id -> referenced the iax_device table ->id
 * @note sip_device_id -> referenced the sip_device table ->id
 * @note user_id -> referenced the user table ->id
 * @note voicemail_id -> referenced the voicemail table ->id
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Extension
 * @version Audara 1.0
*/

class Extension  extends Model{

	protected $table = 'extension';
	protected $primaryKey = 'id';
	protected $fillable = ['id','exten','name','type','context_id','dialplan_extension_id','sip_device_id',
						'iax_device_id','call_context_id','user_id','voicemail_id','conference_id','out_callerid',
						'pinset','timer_in','timer_out','call_recording','forward_busy','forward_external',
						'forward_noanswer','simultaneous_calls','language','send_to','send_to_parameters','register_date','status'];
    
    


}
