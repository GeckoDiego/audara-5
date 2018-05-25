<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/** 
 * @note Create records in the user table
 * @note Based on the structure of the user table  (database/migrations/2018_05_17_184441_create_user_table.php)
 * @date 21-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package UserTableSeeder
 * @version Audara 1.0
 * 
*/

class UserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 *  @note Create the user seed
	 * @note the foreign keys:
     *     @note role_id -> referenced the role table ->id
     *     @note uctool_id -> referenced the uctool table ->id
	 */
	public function run()
	{
		
		DB::table('user')->insert(array(
				'role_id' => 1,
				'uctool_id' => 1,
				'username' => 'SuperAdmin',
				'password' => Hash::make('Gecko2018*',[
					'memory' => 1024,
					'time' => 2,
					'threads' => 2,
				 ]),  			
				'name' => 'Super Admin',
				'email' => 'superadmin@gecko.com.co',
				'address' => 'Av. 15# 106-32 of 403 Bogotá',
				'country_id' => 'COL',
				'city_id' => 'BOG',
				'phone_home' => '55555555',
				'phone_mobile' => '7777777',
				'phone_business' => '3106192198',
				'picture' => 'gecko.jpg',
				'position' => 'SuperAdmin',
				'status' => 'ENABLED',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
				 
		));
		
		
	}
}
