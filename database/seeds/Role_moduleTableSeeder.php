<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/** 
 * @note Create records in the role_module table
 * @note Based on the structure of the role_module table  (database/migrations/2018_05_17_195719_create_role_module_table.php)
 * @date 21-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package Role_moduleTableSeeder
 * @version Audara 1.0
 * 
*/

class Role_moduleTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 * @note Create the role_module seed
	 * @note the foreign keys:
     *  @note role_id -> referenced the role table ->id
     *  @note module_id -> referenced the module table ->d
	 */
	public function run()
	{
		
		DB::table('role_module')->insert(array(
				'role_id' => 1,
				'module_id' => 1,
				'permission' => 'WRITE',
				'status' => 'ENABLED',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
				 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 2,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 3,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 4,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 5,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 6,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 7,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 8,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 9,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 10,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 11,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 12,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 13,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 14,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 15,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 16,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 17,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 18,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 19,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));
		DB::table('role_module')->insert(array(
			'role_id' => 1,
			'module_id' => 20,
			'permission' => 'WRITE',
			'status' => 'ENABLED',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
			 
		));




		
	}
}
