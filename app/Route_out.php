<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Route_out table model
 * @note Based on the structure of the route_out table  (database/migrations/2018_05_18_144303_create_route_out_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Route_out
 * @version Audara 1.0
*/

class Route_out  extends Model{

	protected $table = 'route_out';
	protected $primaryKey = 'id';
    protected $fillable = ['id','name','description','context_id','pattern','prefix','splice','activate_pin','emergency','callerid','status'];
    
    


}
