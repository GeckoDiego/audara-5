<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Country table model
 * @note Based on the structure of the country table  (database/migrations/2018_05_18_140522_create_country_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Country
 * @version Audara 1.0
*/

class Country  extends Model{

	protected $table = 'country';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','status'];
    
    


}
