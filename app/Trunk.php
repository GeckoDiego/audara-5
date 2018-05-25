<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Trunk table model
 * @note Based on the structure of the trunks table  (database/migrations/2018_05_18_142211_create_trunks_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Trunk
 * @version Audara 1.0
*/

class Trunk  extends Model{

	protected $table = 'trunks';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','tech_type','channel','has_timer','has_blacklist','status'];
    
    


}
