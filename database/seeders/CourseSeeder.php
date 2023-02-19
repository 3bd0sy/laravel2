<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\For_;
use App\Models\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=3;$i++){
            for($j=1;$j<=3;$j++){
                Course::create(
                    ['cat_id'=>$i,
                    "trianer_id"=>rand(1,5),
                    "name"=>"course num $j num $i",
                    "small_desc"=>"djs uhushdiushuew dsishiudsh",
                    "desc"=>"sduhsdiuhs duhsudhus",
                    "price"=>rand(100,500),
                    "img"=>"$i$j.png"]
                );
            }
        }
    }
}
