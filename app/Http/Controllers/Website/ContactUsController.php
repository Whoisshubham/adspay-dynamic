<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Validator;
use File;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required",
            "email" => "required|unique:contacts,email|email",
            "subject" => "required|unique:contacts,subject",
            "message" => "required"
        ]);
        if ($validator->fails()) {

            return response()->json(
                $validator->errors()->first()
            );
        }

        $contactStore = new Contact;
        $contactStore->name = $request->name ?? null;
        $contactStore->email = $request->email ?? null;
        $contactStore->subject = $request->subject ?? null;
        $contactStore->message = $request->message ?? null;
        $result = $contactStore->save();

        if ($result) {
            return response()->json(
                "Message Sent Succesfully!"
            );
        } else {
            return response()->json(
                "Somthing Went Wrong"
            );
        }
    }

    public function contactGet()
    {
        $contactUs = Contact::orderBy('Id', "DESC")->get();
        return view('admin.contact.index', compact('contactUs'));
    }
    public function contactDelete($id)
    {
        $contactDelete = Contact::find($id);
        
        $result = $contactDelete->destroy($id);
        if ($result) {
            return redirect()->back()->with('message', 'Deleted Succesfully!');
        } else {
            return redirect()->back()->with('message', 'Somting went wrong!!');
        }

    }
}
