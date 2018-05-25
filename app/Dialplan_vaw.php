<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * Dialplan_vaw table model
 * Produced by: José Torres by Gecko sas
 * Based on the structure of the Dialplan_vaw table  (database/migrations/2018_05_17_201938_create_dialplan_vaw_table.php)
 * the foreign keys:
 *  @context_id -> referenced the context table ->@id
*/

class Dialplan_vaw  extends Model{

	protected $table = 'dialplan_vaw';
	protected $primaryKey = 'id';
    protected $fillable = ['id','context_id','exten','priority','app_name','app_data','order_id','queue_id','app_parameters','status'];
    
    


}
