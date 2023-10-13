<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Validator;
use File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonialList = Testimonial::orderBy("ID", "DESC")->get();
        return view('admin.testimonial.index', compact('testimonialList'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required|unique:testimonials,name",
            "designation" => "required",
            'image' => 'required|image|mimes:jpeg,png,jpg,img|max:2048',
            "message" => "required"
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
            $destinationPath = public_path('/testimonial/image');
            $image->move($destinationPath, $name);
            $image1 = "/testimonial/image" . "/" . $name;
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Image Required!"
            ]);
        }

        $storeTestimonial = new Testimonial;
        $storeTestimonial->name = $request->name ?? null;
        $storeTestimonial->image = $image1 ?? null;
        $storeTestimonial->designation = $request->designation ?? null;
        $storeTestimonial->comments = $request->message ?? null;
        $result = $storeTestimonial->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Added Succesfully!",
                "responseUrl" => url('admin/testimonial')
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
        $contactDelete = Testimonial::find($id);
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
