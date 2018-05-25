<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Group table model
 * @note Based on the structure of the group table  (database/migrations/2018_05_18_145425_create_group_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Group
 * @version Audara 1.0
*/

class Group  extends Model{

	protected $table = 'group';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','description','status'];
    
    


}
