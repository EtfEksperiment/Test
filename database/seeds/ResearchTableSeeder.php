<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResearchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
        	DB::table('researches')->insert([
	            'name' => str_random(10),
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	]);
        }
    }
}
