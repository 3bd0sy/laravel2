<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Trianers;
use App\Models\Students;
use App\Models\Test;

class homepageController extends Controller
{
    public function index(){
        $data["courses"]=Course::select("name","id","cat_id","trianer_id","small_desc","img","price")
        ->orderBy("id","desc")->take(3)->get();
        // dd($data["courses"]);
        $data["courses_count"] = Course::count();
        $data["students_count"] = Students::count();
        $data["trianers_count"] = Trianers::count();
        $data["tests"] = Test::select("name", "spec", "desc", "img")->get();
        return view("front.index",)->with($data);
    }
}
