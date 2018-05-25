<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * Module_app table model
 * Based on the structure of the module_app table  (database/migrations/2018_05_17_195615_create_module_app_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Module_app
 * @version Audara 1.0
*/

class Module_app  extends Model{

	protected $table = 'module_app';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','status'];
    
    


}
