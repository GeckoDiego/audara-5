<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** 
 * @note Conference_user table model
 * @note Based on the structure of the conference_user table  (database/migrations/2018_05_18_132628_create_conference_menu_table.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Conference_user
 * @version Audara 1.0
 * 
*/

class Conference_user  extends Model{

	protected $table = 'conference_user';
	protected $primaryKey = 'id';
    protected $fillable = ['id','type','name','admin', 'marked','startmuted','music_on_hold_when_empty', 
                            'music_on_hold_class','quiet', 'announce_user_count','announce_user_count_all',
                            'announce_only_user', 'wait_marked','end_marked','dsp_drop_silence', 'dsp_talking_threshold',
                            'dsp_silence_threshold','talk_detection_events', 'denoise','jitterbuffer','pin','announce_join_leave', 
                            'announce_join_leave_review', 'dtmf_passthrough','announcement','timeout','status'];
    
    


}
