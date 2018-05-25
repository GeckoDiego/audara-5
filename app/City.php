<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note City table model
 * @note Based on the structure of the city table  (database/migrations/2018_05_18_140921_create_city_table.php)
 * @note the foreign keys:
 * @note country_id -> referenced the country table ->id
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package City
 * @version Audara 1.0
*/

class City  extends Model{

	protected $table = 'city';
	protected $primaryKey = 'id';
    protected $fillable = ['id','country_id','name','status'];
    
    


}
