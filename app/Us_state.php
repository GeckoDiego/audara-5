<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Us_states table model
 * @note Based on the structure of the us_states table  (database/migrations/2018_05_18_141325_create_us_states_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Us_state
 * @version Audara 1.0
*/

class Us_state  extends Model{

	protected $table = 'us_states';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','status'];
    
    


}
