<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Call_context table model
 * @note Based on the structure of the call_context table  (database/migrations/2018_05_18_132153_create_call_context_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Call_context
 * @version Audara 1.0
*/

class Call_context  extends Model{

	protected $table = 'call_context';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','description','status'];
    
    


}
