<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note App table model
 * @note Based on the structure of the app table  (database/migrations/2018_05_18_145134_create_app_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package App
 * @version Audara 1.0
*/

class App  extends Model{

	protected $table = 'app';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','description','advanced','icon','apps','status'];
    
    


}
