<?php

use Illuminate\Database\Seeder;
class ShotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shots')->truncate();

        $items	= [
	        [
	        	'name' => 'Hondenziekte'
	        ],	        
	        [
	        	'name' => 'HCC of Leverziekte'
	        ],	        
	        [
	        	'name' => 'Kennelhoest'
	        ],	        
	        [
	        	'name' => 'Weil'
	        ],	        
	        [
	        	'name' => 'Hondsdolheid'
	        ]

        ];  
        DB::table('shots')->insert($items);


    }
}
