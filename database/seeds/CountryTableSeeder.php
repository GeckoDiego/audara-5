<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/** 
 * @note Create records in the country table
 * @note Based on the structure of the country table  (database/migrations/2018_05_18_140522_create_country_table.php)
 * @date 21-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CountryTableSeeder
 * @version Audara 1.0
 * 
*/

class CountryTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 * @note Create the country seed
	 */
	public function run()
	{
				
		DB::table('country')->insert(array(
				'id' => 'COL',
				'name' => 'Colombia',
				'status' => 'ENABLED',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
				 
		));
		
		
	}
}
