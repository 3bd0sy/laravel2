<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 10; $i++) {
            DB::table("course_student")->insert(
                [
                    "course_id" => rand(1, 5),
                    "student_id" => rand(1, 5),
                    "created_at" => now(),
                    "updated_at" => now()

                ]
            );
        }
    }
}
