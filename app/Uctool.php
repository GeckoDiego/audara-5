<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Uctoll table model
 * @note Based on the structure of the uctool table  (database/migrations/2018_05_17_184402_create_uctool_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Uctool
 * @version Audara 1.0
*/

class Uctool  extends Model{

	protected $table = 'uctool';
	protected $primaryKey = 'id';
    protected $fillable = ['id','chat_available','call_recording','conf_recording','visible_in_directory','call_restriction_uctool_close','call_nopinset_uctool_open','web_notify_with_activity','forward_noanswer_action','forward_noanswer_exten','maximun_hold_calls','status'];

}
