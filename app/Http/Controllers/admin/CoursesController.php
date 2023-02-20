<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Trianers;

 class CoursesController extends Controller
{
    public function index()
    {
        $data["courses"] = Course::select("id", "name","price","desc")->get();
        return view("admin.course.index")->with($data);
    }
    public function create()
    {
        $data["cats"]=Cat::select("id","name")->get();
        $data["trainers"]=Trianers::select("id","name")->get();
        return view("admin.course.create")->with($data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string",
            "price" => "required",
            "desc" => "required",
            "cat_id" => "required|exists:cats,id",
            "trainer_id" => "required|exists:trianers,id"
        ]);
        Course::create($data);
        return redirect(route("admin.course.index"));
    }
    public function edit($id)
    {
        $data["t"] = Course::findOrFail($id);
        $data["cats"]=Cat::select("id","name")->get();
        $data["trainers"]=Trianers::select("id","name")->get();
        // return view("admin.course.create")->with($data);
        return view("admin.course.edit")->with($data);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string",
            "price" => "required",
            "desc" => "required",
            "cat_id" => "required|exists:cats,id",
            "trainer_id" => "required|exists:trainers,id"
        ]);
        Course::findOrFail($request->id)->update($data);
        return back();
    }
    public function delete($id)
    {
    Course::findOrFail($id)->delete();

        return  back();
    }


}
