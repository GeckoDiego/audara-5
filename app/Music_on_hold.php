<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Music_on_hold table model
 * @note Based on the structure of the music_on_hold table  (database/migrations/2018_05_18_144640_create_music_on_hold_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Music_on_hold
 * @version Audara 1.0
*/

class Music_on_hold  extends Model{

	protected $table = 'music_on_hold';
	protected $primaryKey = 'name';
    protected $fillable = ['name','directory','random','mode','status'];
    
    


}
