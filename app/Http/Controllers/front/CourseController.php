<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cat;
use App\Models\Course;

class CourseController extends Controller
{
    public function cat($id)
    {
        $data["cat"] = Cat::findOrFail($id);
        $data["courses"] = Course::where("cat_id", $id)->paginate(); # ->get();
        return view("front.courses.cat")->with($data);
    }

    public function show($id, $cId)
    {
        $data["course"] = Course::findOrFail($cId); # ->get();
        return view("front.courses.show")->with($data);
    }
}
