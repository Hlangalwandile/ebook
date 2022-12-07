<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class booktokensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('booktokens')->insert([
        //     'token' => Str::random(10)
        // ]);
        for ($i = 0; $i < 30; $i++) {
            DB::table('booktokens')->insert([
                'token' => Str::random(10),
            ]);
        }
    }
}
