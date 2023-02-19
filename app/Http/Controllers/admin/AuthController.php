<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view("admin.auth.login");
    }
    public function dologin(Request $request)
    {
// dd($request);
        // $data = $request->validate([
        //     "email" => 'required|email|max:255',
        //     "password" => 'required'
        // ]);
        $data = $request;
        if (auth()->guard("admin")->attempt(["email" => $data["email"], "password" => $data["password"]])) {
            return back();
        } else {
            return redirect(route("admin.home"));
        }
    }
    public function login_out()
    {
        auth()->guard("admin")->logout();
        return redirect(route("admin.login"));
    }
}
