<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Context_type table model
 * @note Based on the structure of the context_type table  (database/migrations/2018_05_17_201213_create_context_type_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Context_type
 * @version Audara 1.0
*/

class Context_type  extends Model{

	protected $table = 'context_type';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','description','status'];
    
    


}
