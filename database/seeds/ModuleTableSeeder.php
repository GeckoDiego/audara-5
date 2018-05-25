<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/** 
 * @note Create records in the module table
 * @note Based on the structure of the module table  (database/migrations/2018_05_17_195647_create_module_table.php)
 * @date 21-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package ModuleTableSeeder
 * @version Audara 1.0
 * 
*/

class ModuleTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 * @note Create the module seed
	 * @note the foreign keys:
     * @note rolmodule_type_ide_id -> referenced the module_app table ->id
	 */
	public function run()
	{
		

		DB::table('module')->insert(array(
				'name' => 'Dashboard',
				'description' => 'Module that will show a summary of calls made. Number of registered users',
				'alias' => 'dashboard',
				'module_type_id' => 1,
				'module_category_id' => 1,
				'order' => 1,
				'status' => 'ENABLED',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
				 
		));
		DB::table('module')->insert(array(
			'name' => 'User Extensions',
			'description' => 'Module where it will be done as a wizard to parameterize an extension',
			'alias' => 'userExtensions',
			'module_type_id' => 1,
			'module_category_id' => 1,
			'order' => 2,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('module')->insert(array(
			'name' => 'Trunks',
			'description' => '',
			'alias' => 'trunks',
			'module_type_id' => 1,
			'module_category_id' => 3,
			'order' => 3,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Incoming',
			'description' => '',
			'alias' => 'incoming',
			'module_type_id' => 1,
			'module_category_id' => 3,
			'order' => 4,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Outcoming',
			'description' => '',
			'alias' => 'outcoming',
			'module_type_id' => 1,
			'module_category_id' => 3,
			'order' => 5,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Categories',
			'description' => '',
			'alias' => 'categories',
			'module_type_id' => 1,
			'module_category_id' => 3,
			'order' => 6,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Black List',
			'description' => '',
			'alias' => 'blackList',
			'module_type_id' => 1,
			'module_category_id' => 3,
			'order' => 7,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Time Condition',
			'description' => 'Module that allows you to create time conditions',
			'alias' => 'timeCondition',
			'module_type_id' => 1,
			'module_category_id' => 3,
			'order' => 8,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'IVR',
			'description' => 'Module that allows to create IVRs',
			'alias' => 'ivr',
			'module_type_id' => 1,
			'module_category_id' => 4,
			'order' => 9,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Call Detail Reports',
			'description' => 'Report shows the detail of the calls stored in the CDR',
			'alias' => 'callDetailReports',
			'module_type_id' => 1,
			'module_category_id' => 5,
			'order' => 10,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Call Recordings',
			'description' => 'Gram report from pbxManger',
			'alias' => 'callRecordings',
			'module_type_id' => 1,
			'module_category_id' => 5,
			'order' => 11,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'IVR Data',
			'description' => 'Report of data captured in the IVR',
			'alias' => 'IvrData',
			'module_type_id' => 1,
			'module_category_id' => 5,
			'order' => 12,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'General Setup',
			'description' => 'General parameterization module pbxManager',
			'alias' => 'generalSetup',
			'module_type_id' => 1,
			'module_category_id' => 6,
			'order' => 13,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Call Groups',
			'description' => 'Module that allows parameterizing call categories',
			'alias' => 'callGroups',
			'module_type_id' => 1,
			'module_category_id' => 6,
			'order' => 14,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Music On Hold',
			'description' => 'Module that allows parameterizing the music on hold',
			'alias' => 'musicOnHold',
			'module_type_id' => 1,
			'module_category_id' => 6,
			'order' => 15,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Sounds/Voices',
			'description' => 'Module that allows you to manage the sounds that will be used in the IVR',
			'alias' => 'soundsVoices',
			'module_type_id' => 1,
			'module_category_id' => 6,
			'order' => 16,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Features Codes',
			'description' => '',
			'alias' => 'featuresCodes',
			'module_type_id' => 1,
			'module_category_id' => 6,
			'order' => 17,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'SIP',
			'description' => 'Module that allows parameterizing SIP devices',
			'alias' => 'sip',
			'module_type_id' => 1,
			'module_category_id' => 6,
			'order' => 18,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'IAX',
			'description' => 'Module that allows parameterizing IAX devices',
			'alias' => 'iax',
			'module_type_id' => 1,
			'module_category_id' => 6,
			'order' => 19,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module')->insert(array(
			'name' => 'Voicemail',
			'description' => 'Module that allows voicemail parameterization',
			'alias' => 'voicemail',
			'module_type_id' => 1,
			'module_category_id' => 6,
			'order' => 20,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));



		
		
	}
}
