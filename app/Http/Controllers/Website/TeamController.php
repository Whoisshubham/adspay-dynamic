<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Validator;
use File;

class TeamController extends Controller
{
    public function index()
    {
        $teamList = Team::orderBy("Id", "DESC")->get();
        return view('admin.team.index', compact('teamList'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required|unique:teams,name",
            "designation" => "required",
            'image' => 'required|image|mimes:jpeg,png,jpg,img|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/team/image');
            $image->move($destinationPath, $name);
            $image1 = "/team/image" . "/" . $name;
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Image Required!"
            ]);
        }

        $storeTeam = new Team;
        $storeTeam->name = $request->name ?? null;
        $storeTeam->image = $image1 ?? null;
        $storeTeam->designation = $request->designation ?? null;
        $storeTeam->facebook = $request->facebook ?? null;
        $storeTeam->instagram = $request->instagram ?? null;
        $storeTeam->linkedin = $request->linkedin ?? null;
        $result = $storeTeam->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Added Succesfully!",
                "responseUrl" => url('admin/team')
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }

    }

    public function delete($id)
    {
        $contactDelete = Team::find($id);
        if (File::exists(public_path($contactDelete->image))) {
            File::delete(public_path($contactDelete->image));
        }
        $result = $contactDelete->destroy($id);
        if ($result) {
            return redirect()->back()->with('message', 'Deleted Succesfully!');
        } else {
            return redirect()->back()->with('message', 'Somting went wrong!!');
        }

    }
}
