<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Conference_menu_parameters table model
 * @note Based on the structure of the conference_menu_parameters table  (database/migrations/2018_05_18_132153_create_call_context_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Conference_menu_parameter
 * @version Audara 1.0
 * 
*/

class Conference_menu_parameter  extends Model{

	protected $table = 'conference_menu_parameters';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','status'];
    
    


}
