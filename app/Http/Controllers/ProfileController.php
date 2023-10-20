<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Validator;

class ProfileController extends Controller
{
    public function index()
    {
        return view("admin.profile.index");
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $validator = Validator::make($request->all(), [
            "old_password" => "required",
            "password" => "required",
            "confirmed_password" => "required|same:password"
        ]);
        if (Hash::check($request->old_password, $user->password)) {
            $userProfile = User::find($user->id);
            $userProfile->password =Hash::make($request->password);
            $result = $userProfile->save();
            if ($result) {
                return response()->json([
                    "responseCode" => 200,
                    "responseMessage" => "Added Succesfully!",
                    "responseUrl" => url('admin/dashboard')
                ]);
            } else {
                return response()->json([
                    "responseCode" => 403,
                    "responseMessage" => "Somthing Went Wrong!"
                ]);
            }
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Old Password is miss match!"
            ]);
        }



    }
}
