<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Guest;
use App\Models\Reservation;
use App\Models\Student;
use App\Models\Turn;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SemesterSeeder::class);
        Career::create([
            'name' => 'sistemas'
        ]);
        Student::create([
            'career_id' => 1,
            'semester_id' => 10,
            'identification' => '1206857375',
            'name' => 'cesar',
            'lastname' => 'lata',
            "mothers_lastname" => 'jacome'
        ]);
        Turn::create([
            'days' => now(),
            'hour' => '17:28:05',
        ]);
        Reservation::create([
            'student_id' => 1,
            'turn_id' => 1,
        ]);
        Guest::factory(3)->create();
        // \App\Models\User::factory(10)->create();
    }
}
