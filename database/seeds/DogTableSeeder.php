<?php

use Illuminate\Database\Seeder;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->truncate();

        $items = [
	        [
	        	'name' => 'Jesko',
	        	'born_at' => '2012-08-28',
	        	'color' => 'Bruin/zwart',
	        	'user_id' => mt_rand(1,3),
	        	'breed_id' => mt_rand(1,3)

	        ],        
	        [
	        	'name' => 'Gizmo',
	        	'born_at' => '2012-08-28',
	        	'color' => 'Wit',
	        	'user_id' => mt_rand(1,3),
	        	'breed_id' => mt_rand(1,3)
	        ],        
	        [
	        	'name' => 'Rodi',
	        	'born_at' => '2012-08-28',
	        	'color' => 'Bruin/zwart',
	        	'user_id' => mt_rand(1,3),
	        	'breed_id' => mt_rand(1,3)
	        ],        
	        [
	        	'name' => 'Sunny',
	        	'born_at' => '2012-08-28',
	        	'color' => 'Bruin/Zwart',
	        	'user_id' => mt_rand(1,3),
	        	'breed_id' => mt_rand(1,3)
	        ]
        ];  
        DB::table('dogs')->insert($items);

    }

}
