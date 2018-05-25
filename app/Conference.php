<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Conference table model
 * @note Based on the structure of the conference table  (database/migrations/2018_05_18_135420_create_conference_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Conference
 * @version Audara 1.0
 * @note the foreign keys:
 * @note conference_bridge_id -> referenced the conference_bridge table ->id
 * @note conference_menu_id -> referenced the conference_menu table ->id
 * @note conference_user_id -> referenced the conference_user table ->id
*/

class Conference  extends Model{

	protected $table = 'conference';
	protected $primaryKey = 'id';
    protected $fillable = ['id','conference_bridge_id','conference_menu_id','conference_user_id','number','status'];
    
    


}
