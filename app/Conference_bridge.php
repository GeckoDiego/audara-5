<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Conference_bridge table model
 * @note Based on the structure of the conference_bridge table  (database/migrations/2018_05_18_134341_create_conference_bridge_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Conference_bridge
 * @version Audara 1.0
*/

class Conference_bridge  extends Model{

	protected $table = 'conference_bridge';
	protected $primaryKey = 'id';
	protected $fillable = ['id', 'type','name','max_members','record_file','internal_sample_rate',
						'mixing_interval','video_mode','language','regcontext','sound_join','sound_leave',
						'sound_has_joined','sound_has_left','sound_kicked','sound_muted','sound_unmuted',
						'sound_only_person','sound_only_one','sound_there_are','sound_other_in_party',
						'sound_place_into_conference','sound_wait_for_leader','sound_leader_has_left',
						'sound_get_pin','sound_invalid_pin','sound_locked','sound_locked_now','sound_unlocked_now',
						'sound_error_menu','sound_begin','status'];
    

}
