<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Directory table model
 * @note Based on the structure of the directory table  (database/migrations/2018_05_18_145825_create_directory_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Directory
 * @version Audara 1.0
*/

class Directory  extends Model{

	protected $table = 'directory';
	protected $primaryKey = 'id';
    protected $fillable = ['id','user_exten','directory_group_id','status'];
    
    


}
