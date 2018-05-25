<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/** 
 * @note Create records in the module_category table
 * @note Based on the structure of the module_category table  (database/migrations/2018_05_17_195647_create_module_category_table.php)
 * @date 22-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Module_catagoryTableSeeder
 * @version Audara 1.0
 * 
*/

class Module_catagoryTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 * @note Create the module_category seed
	 */
	public function run()
	{
		DB::table('module_category')->insert(array(
				'name' => 'dashboard',
				'order' => 1,
				'status' => 'ENABLED',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
				 
		));
		DB::table('module_category')->insert(array(
			'name' => 'userExtensions',
			'order' => 2,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('module_category')->insert(array(
			'name' => 'trunks',
			'order' => 3,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module_category')->insert(array(
			'name' => 'ivr',
			'order' => 4,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module_category')->insert(array(
			'name' => 'reports',
			'order' => 5,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module_category')->insert(array(
			'name' => 'general',
			'order' => 6,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		DB::table('module_category')->insert(array(
			'name' => 'system',
			'order' => 7,
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			
		));
		
		
	}
}
