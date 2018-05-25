<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/** 
 * @note Create records in the role table
 * @note Based on the structure of the role table  (database/migrations/2018_05_17_184342_create_role_table.php)
 * @date 21-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package RoleTableSeeder
 * @version Audara 1.0
 * 
*/

class RoleTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 * @note Create the role seed
	 * @note role_id -> referenced the role table ->id
     * @note module_id -> referenced the module table ->d
	 */
	public function run()
	{
		
		
		DB::table('role')->insert(array(
				'name' => 'Super Admin',
				'description' => 'Super Administrator',
				'status' => 'ENABLED',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
				 
		));
		
		
	}
}
