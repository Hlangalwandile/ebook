<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'NCV','parentID' => 0],
            ['name'=>'Nated','parentID' => 0],
            ['name'=>'N1','parentID' => 0],
            ['name'=>'N2','parentID' => 0],
            ['name'=>'N3','parentID' => 0],
            ['name'=>'N4','parentID' => 0],
            ['name'=>'N5','parentID' => 0],
            ['name'=>'N6','parentID' => 0],
            ['name'=>'Civil Engineering','parentID' => 0],
            ['name'=>'Electrical Engineering','parentID' => 0],
            ['name'=>'Mechanical Engineering','parentID' => 0],
            ['name'=>'Engineering','parentID' => 0],
            ['name'=>'Mathematics','parentID' => 0]
        ]);
    }
}
