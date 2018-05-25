<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Dialplan_extension table model
 * @note Based on the structure of the Dialplan_extension table  (database/migrations/2018_05_18_131820_create_dialplan_extension_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Dialplan_extension
 * @version Audara 1.0
 * 
*/

class Dialplan_extension  extends Model{

	protected $table = 'dialplan_extension';
	protected $primaryKey = 'id';
    protected $fillable = ['id','priority','app_name','appdata','order_id','send_to','send_to_parameters','status'];
    
    


}
