<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Validator;
use File;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryList = Gallery::orderBy("Id", "DESC")->get();
        return view('admin.gallery.index', compact('galleryList'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
            $destinationPath = public_path('/gallery/image');
            $image->move($destinationPath, $name);
            $image1 = "/gallery/image" . "/" . $name;
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Image Required!"
            ]);
        }

        $storeTeam = new Gallery;
        $storeTeam->image = $image1 ?? null;
        $result = $storeTeam->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Added Succesfully!",
                "responseUrl" => url('admin/gallery')
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
        $contactDelete = Gallery::find($id);
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
