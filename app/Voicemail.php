<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Voicemail table model
 * @note Based on the structure of the voicemail table  (database/migrations/2018_05_18_121012_create_voicemail_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Voicemail
 * @version Audara 1.0
*/

class Voicemail  extends Model{

	protected $table = 'voicemail';
	protected $primaryKey = 'id';
    protected $fillable = ['id','mailbox','password','fullname','email','pager','attach','saycid','hidefromdir','stamp','status'];
    
    


}
