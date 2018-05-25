<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Directory_group table model
 * @note Based on the structure of the directory_group table  (database/migrations/2018_05_18_141325_create_us_states_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Directory_group
 * @version Audara 1.0
*/

class Directory_group  extenDs Model{

	protected $table = 'directory_group';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','status'];
    
    


}
