<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trianers;

class TrianerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trianers::create(
            [
                'name' => 'kareem d',
                "phone"=>"02165",
                'spec' => 'web dev',
                "img" => "1.jpg"
            ]
        );
        Trianers::create(
            [
                'name' => 'abdo v',
                "phone"=>"02165",
                'spec' => 'php dev',
                "img" => "2.jpg"
            ]
        );
        Trianers::create(
            [
                'name' => 'sara l',
                "phone"=>"02165",
                'spec' => 'english',
                "img" => "3.jpg"
            ]
        );
        Trianers::create(
            [
                'name' => 'ahmad x',
                "phone"=>"02165",
                'spec' => 'python',
                "img" => "4.jpg"
            ]
        );
        Trianers::create(
            [
                'name' => 'koko r',
                "phone"=>"02165",
                'spec' => 'arabic',
                "img" => "5.jpg"
            ]
        );
    }
}
