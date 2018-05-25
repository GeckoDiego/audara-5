<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Conference_menu table model
 * @note Based on the structure of the conference_menu table  (database/migrations/2018_05_18_132628_create_conference_menu_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Conference_menu
 * @version Audara 1.0 
*/

class Conference_menu  extends Model{

	protected $table = 'conference_menu';
	protected $primaryKey = 'id';
    protected $fillable = ['id','type','name','playback','playback_and_continue','status'];
    
    


}
