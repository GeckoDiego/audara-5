<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Route_out_trunk table model
 * @note Based on the structure of the route_out_trunks table  (database/migrations/2018_05_18_142802_create_route_out_trunks_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Route_out_trunk
 * @version Audara 1.0
*/

class Route_out_trunk  extends Model{

	protected $table = 'route_out_trunks';
	protected $primaryKey = 'id';
    protected $fillable = ['id','route_out_id','trunks_id','priority','splice','out_prefix','status'];
    
    


}
