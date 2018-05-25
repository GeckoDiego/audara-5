<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Role table model
 * @note Based on the structure of the role table  (database/migrations/2018_05_17_184342_create_role_table.php)
 * @author José Torres 
 * @copyright Gecko sas
 * @package Role
 * @version Audara 1.0
*/

class Role  extends Model{

	protected $table = 'role';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','description','status'];
    
    


}
