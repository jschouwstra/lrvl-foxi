<?php

use Illuminate\Database\Seeder;

class DogShotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('dog_shot')->truncate();

        $items = [
	        [
	        	'dog_id' => mt_rand(1,3),
	        	'shot_id' => mt_rand(1,5),
	        ],  	        
	        [
	        	'dog_id' => mt_rand(1,3),
	        	'shot_id' => mt_rand(1,5),
	        ],  	        
	        [
	        	'dog_id' => mt_rand(1,3),
	        	'shot_id' => mt_rand(1,5),
	        ]        
        ];  
        DB::table('dog_shot')->insert($items);

    }
}
