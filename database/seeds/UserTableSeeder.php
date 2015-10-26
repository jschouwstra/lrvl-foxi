<?php

use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

    	$items = [
            [
                'name' => 'erik',
                'email' => 'erik@pindakaas.nl',
                'password' => Hash::make('erik')
            ],          
            [
                'name' => 'jelle',
                'email' => 'jelle@pindakaas.nl',
                'password' => Hash::make('jelle')
            ],    		
            [
    			'name' => 'sjak',
    			'email' => 'sjak@pindakaas.nl',
    			'password' => Hash::make('sjak')
    		]
    	];
        DB::table('users')->insert($items);
    }
}
