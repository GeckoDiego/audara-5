<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/** 
 * @note Create records in the city table
 * @note Based on the structure of the city table  (database/migrations/2018_05_18_140921_create_city_table.php)
 * @date 21-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CityTableSeeder
 * @version Audara 1.0
 * 
*/

class CityTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 * @note Create the city seed
     * @note the foreign keys:
     *     @note country_id -> referenced the country table ->id
	 */
	public function run()
	{
				
		DB::table('city')->insert(array(
			    'id' => 'BOG',
				'country_id' => 'COL',
				'name' => 'Bogotá',
				'status' => 'ENABLED',
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
				 
		));
		
		
	}
}
