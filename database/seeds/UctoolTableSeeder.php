<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/** 
 * @note Create records in the uctool table
 * @note Based on the structure of the uctool table  (database/migrations/2018_05_17_184402_create_uctool_table.php)
 * @date 21-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package UctoolTableSeeder
 * @version Audara 1.0
 * 
*/

class UctoolTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 *  @note Create the uctool seed
	 */
	public function run()
	{
		
		DB::table('uctool')->insert(array(
				'chat_available' => 'NO',
				'call_recording' => 'NO',
				'conf_recording' => 'NO',
				'visible_in_directory' => 'YES',
				'call_restriction_uctool_close' => 'NO',
				'call_nopinset_uctool_open' => 'NO',
				'web_notify_with_activity' => 'YES',
				'forward_noanswer_action' => 'EXTEN',
				'forward_noanswer_exten' => '2',
				'maximun_hold_calls' => 2,
				'status' => 'ENABLED',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
				 
		));
		
		
	}
}
