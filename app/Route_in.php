<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Route_in table model
 * Based on the structure of the Route_in table  (database/migrations/2018_05_17_202654_create_route_in_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Route_in
 * @version Audara 1.0
 * @note the foreign keys:
 * @note context_id -> referenced the context table ->id
*/

class Route_in  extends Model{

	protected $table = 'route_in';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','context_id','type','pattern','goto','manual','off_schedule','status'];
    
    


}
