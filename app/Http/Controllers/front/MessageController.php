<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\Students;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function newsletter(Request $request){
        // dd("sdkjndfkjsdfkjs");
        $data = $request->validate([
            'email' => "required|email"
        ]);
        Newsletter::create($data);
        return back();
    }


    public function enroll(Request $request){
        $data = $request->validate([
            'name' => "nullable|string",
            'email' => "required|email",
            'spec' => "nullable|string",
            'course_id' => "required|exists:courses,id",
        ]);
      $student= Students::create([
            "name"=>$data["name"],
            "email"=>$data["email"],
            "spec"=>$data["spec"]
        ]);

        $student_id = $student->id;

        DB::table("course_student")->insert(
            [
                "course_id" => $data["course_id"],
                "student_id" => $student_id,
                "created_at" => now(),
                "updated_at" => now()

            ]
        );
        return back();
    }
}
