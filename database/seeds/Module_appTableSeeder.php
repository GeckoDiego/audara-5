<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/** 
 * @note Create records in the module_app table
 * @note Based on the structure of the module_app table  (database/migrations/2018_05_17_195615_create_module_app_table.php)
 * @date 21-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Module_appTableSeeder
 * @version Audara 1.0
 * 
*/

class Module_appTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 * @note Create the module_app seed
	 * 
	 */
	public function run()
	{
		DB::table('module_app')->insert(array(
				'name' => 'pbxManager',
				'status' => 'ENABLED',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
				 
		));
		DB::table('module_app')->insert(array(
			'name' => 'ucTools',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('module_app')->insert(array(
			'name' => 'ccsManger',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('module_app')->insert(array(
			'name' => 'ccsTools',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		
		
	}
}
