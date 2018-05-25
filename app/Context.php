<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Context table model
 * @note Based on the structure of the Context table  (database/migrations/2018_05_17_201403_create_context_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Context
 * @version Audara 1.0
 * @note the foreign keys:
 * @note context_type_id -> referenced the context_type table ->id
 * 
*/

class Context  extends Model{

	protected $table = 'context';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','description','context_type_id','status'];
    
    


}
