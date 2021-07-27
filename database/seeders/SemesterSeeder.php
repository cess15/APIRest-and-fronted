<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('semesters')->insert([
            [
                'id' => 1,
                'name' => 'primero',
            ],
            [
                'id' => 2,
                'name' => 'segundo',
            ],
            [
                'id' => 3,
                'name' => 'tercero',
            ],
            [
                'id' => 4,
                'name' => 'cuarto',
            ],
            [
                'id' => 5,
                'name' => 'quinto',
            ],
            [
                'id' => 6,
                'name' => 'sexto',
            ],
            [
                'id' => 7,
                'name' => 'septimo',
            ],
            [
                'id' => 8,
                'name' => 'octavo',
            ],
            [
                'id' => 9,
                'name' => 'noveno',
            ],
            [
                'id' => 10,
                'name' => 'decimo',
            ],
        ]);
    }
}
