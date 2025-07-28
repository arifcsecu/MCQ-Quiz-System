<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    function login(Request $request)
    {

        $validation = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where([
            ['name', '=', $request->name],
            ['password', '=', $request->password]]
        )->first();

        if (!$admin)
        {
            $validation = $request->validate(
                ["user" => "required"],
                ["user.required" => "user doesn't exist"]
            );
        }

        return view('admin', ["name" => $admin->name]);
    }
}
