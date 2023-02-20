<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trianers;
class TrainerController extends Controller
{
    public function index()
    {
        $data["Trainers"] = Trianers::select("id", "name","phone","spec")->get();
        return view("admin.trainer.index")->with($data);
    }
    public function create()
    {
        return view("admin.trainer.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string",
            "phone" => "required"
            ,"spec" => "required"
        ]);
        Trianers::create($data);
        return redirect(route("admin.trainer.index"));
    }
    public function edit($id)
    {
        $data["t"] = Trianers::findOrFail($id);

        return view("admin.trainer.edit")->with($data);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string",
            "phone" => "required"
            ,"spec" => "required"
        ]);
        Trianers::findOrFail($request->id)->update($data);
        return back();
    }
    public function delete($id)
    {
    Trianers::findOrFail($id)->delete();

        return  back();
    }


}
