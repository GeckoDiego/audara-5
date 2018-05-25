<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note User_dialplan table model
 * @note Based on the structure of the user_dialplan table  (database/migrations/2018_05_18_145552_create_user_dialplan_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package User_dialplan
 * @version Audara 1.0
*/

class User_dialplan  extends Model{

	protected $table = 'user_dialplan';
	protected $primaryKey = 'id';
    protected $fillable = ['id','exten','priority','app_name','appdata','order_id','status'];
    
    


}
