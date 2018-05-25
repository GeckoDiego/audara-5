<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Module_category table model
 * @note Based on the structure of the Module_category table  (database/migrations/2018_05_17_195647_create_module_category_table.php)
 * @date 22-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Module_category
 * @version Audara 1.0
*/

class Module_category  extends Model{

	protected $table = 'module_category';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','order','status'];
    
    


}
