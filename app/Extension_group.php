<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Extension_group table model
 * @note Based on the structure of the extension_group table  (database/migrations/2018_05_18_153425_create_extension_group_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Extension_group
 * @version Audara 1.0
*/

class Extension_group  extends Model{

	protected $table = 'extension_group';
	protected $primaryKey = 'extension_id';
    protected $fillable = ['extension_id','group_id','status'];
    
    


}
