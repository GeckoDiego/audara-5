<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        /*
        $this->call('CountryTableSeeder'); 
        $this->call('CityTableSeeder');  
        $this->call('Module_appTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('Module_catagoryTableSeeder'); 
        $this->call('ModuleTableSeeder');
        $this->call('Role_moduleTableSeeder'); 
        $this->call('UctoolTableSeeder'); 
        $this->call('UserTableSeeder'); 
        */
        DB::table('user')->insert([
            'role_id' => '1',
            'uctool_id' => '1',
            'username' => 'diego.soba',
            'password' => bcrypt('secret'),
            'name' => 'Diego Soba',
            'email' => 'diego.soba@gecko.com.co',
            'address' => 'Av. 15# 106-32 of 403 Bogotá',
            'country_id' => 'COL',
            'city_id' => 'BOG',
            'phone_home' => '5636985',
            'phone_mobile' => '3005207017',
            'phone_business' => '3005208017',
            'picture' => 'gecko.jpg',
            'position' => 'Full Stack',
            'status' => 'ENABLED', 
            'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")          
        ]);
        
    }
}
