<?php

use Illuminate\Database\Seeder;
class BreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->truncate();

    	$items = [
	    	[
	    		'name' => 'Duitse Herder'
	    	],	    	
	    	[
	    		'name' => 'Tsjechoslowaakse wolfhond'
	    	],	    	
	    	[
	    		'name' => 'Shitzu'
	    	]

    	];
        DB::table('breeds')->insert($items);

    }
}
