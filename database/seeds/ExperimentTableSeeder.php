<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperimentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    for($i = 0; $i < 20; $i++){
	        DB::table('experiments')->insert([
	            'name' => str_random(10),
	            'comment' => str_random(10),
                //'task_id' => 1,
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
	        ]);
    	}
    }
}
