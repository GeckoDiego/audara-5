<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Module table model
 * @note Based on the structure of the module table  (database/migrations/2018_05_22_172515_create_module_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Module
 * @version Audara 1.0
 * @note the foreign keys:
 * @note rolmodule_type_ide_id -> referenced the module_app table ->id
*/

class Module  extends Model{

	protected $table = 'module';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','description','alias','module_type_id','order','status'];
    
    


}
