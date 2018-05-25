<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note network_measures table model
 * @note Based on the structure of the network_measures table  (database/migrations/2018_05_18_142452_create_network_measures_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Network_measure
 * @version Audara 1.0
*/

class Network_measure  extends Model{

	protected $table = 'network_measures';
	protected $primaryKey = 'id';
    protected $fillable = ['id','panel_type','panel_id','log_date','measures','measure_dates','status'];
    
    


}
