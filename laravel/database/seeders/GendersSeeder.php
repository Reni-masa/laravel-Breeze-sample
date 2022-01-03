<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;
use Illuminate\Support\Facades\DB;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::truncate();
        DB::table('genders')->insert([
            ['id' => 1, 'name' => '男'],
            ['id' => 2, 'name' => '女'],
        ]);
    }
}
