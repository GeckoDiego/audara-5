<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Role_module table model
 * @note Based on the structure of the role_module table  (database/migrations/2018_05_22_172516_create_role_module_table.php)
 * @date 22-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Role_module
 * @version Audara 1.0
 * @note the foreign keys:
 * @note	role_id -> referenced the role table ->id
 * @note	module_id -> referenced the module table ->id
*/

class Role_module  extends Model{

	protected $table = 'role_module';
	protected $primaryKey = 'id';
    protected $fillable = ['id','role_id','module_id','permission','order','status'];
    
    


}
