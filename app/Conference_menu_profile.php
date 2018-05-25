<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Conference_menu_profile table model
 * @note Based on the structure of the conference_menu_profile table  (database/migrations/2018_05_18_132628_create_conference_menu_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Conference_menu_profile
 * @version Audara 1.0
 * @note the foreign keys:
 * @note  conference_menu_id -> referenced the conference_menu table ->id
 * @note conference_menu_parameter_id -> referenced the conference_menu_parameters table ->id
 * 
*/

class Conference_menu_profile  extends Model{

	protected $table = 'conference_menu_profile';
	protected $primaryKey = 'id';
    protected $fillable = ['id','conference_menu_parameter_id','conference_menu_id','digit_code','status'];
    
    


}
