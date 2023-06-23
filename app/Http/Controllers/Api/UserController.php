<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\formSubmit;
use App\Models\MessagesUser;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function formSubmit(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'mobile' => "required|unique:form_submits,mobile,",
        ]);
        $find = formSubmit::where('mobile', $request->mobile)->first();
        if ($validate->fails()) {
            return response()->json([
                //validator error code
                "responseCode" => "403",
                "responseMessage" => $validate->errors()->first(),
            ]);
        }
        if ($find !== null) {
            $formSubmit = formSubmit::find($find->id);
            $MessageUser = MessagesUser::find($find->id);
            $formSubmit->name = $request->name ?? null;
            $formSubmit->mobile = $request->mobile ?? null;
            $MessageUser->mobile = $request->mobile ?? null;
            $formSubmit->dob = $request->dob ?? null;
            $formSubmit->email = $request->email ?? null;
            $result = $formSubmit->save();
            $MessageUser->save();
            if ($result == true) {
                $idGet = formSubmit::where('mobile', $request->mobile)->first();
                return response()->json([
                    "responseCode" => "200",
                    "responseId" => $idGet->id ?? "went wrong!",
                    "responseMessage" => "SucessFully Inserted"
                ]);
            } else {
                return response()->json([
                    "responseCode" => "400",
                    "responseMessage" => "Somthing went wrong"
                ]);
            }
        } else {

            $formSubmit = new formSubmit;
            // $message=;
            $formSubmit->name = $request->name ?? null;
            $formSubmit->mobile = $request->mobile ?? null;
            $formSubmit->dob = $request->dob ?? null;
            $formSubmit->email = $request->email ?? null;
            $result = $formSubmit->save();
            if ($result == true) {
                $idGet = formSubmit::where('mobile', $request->mobile)->first();
                return response()->json([
                    "responseCode" => "200",
                    "responseId" => $idGet->id ?? "went wrong!",
                    "responseMessage" => "SucessFully Inserted"
                ]);
            } else {
                return response()->json([
                    "responseCode" => "400",
                    "responseMessage" => "Somthing went wrong"
                ]);
            }
        }
    }


    public function cardSubmit(Request $request, $id)
    {
        $request->validate([
            'card' => "required|max:16,min:16",
            'cvv' => "required|max:3|min:3",
            'expdt' => "required"
        ]);
        $cardDetails = [
            "cardNumber" => $request->card ?? null,
            "cvv" => $request->cvv ?? null,
            "expdt" => $request->expdt ?? null,
        ];

        $dataUpdate = formSubmit::find($id);
        $dataUpdate->card_details = json_encode($cardDetails, true) ?? null;
        $result = $dataUpdate->save();
        if ($result == true) {
            return response()->json([
                "responseCode" => "200",
                "resonseMessage" => "Save Succesfully!"
            ]);
        } else {
            return response()->json([
                "responseCode" => "400",
                "resonseMessage" => "Went Something Wrong!"
            ]);
        }

    }

    public function messasesShow(Request $request){
        if ($request->mobile!==null) {
            dd($request);
        }else {
            dd($request);
        }
    }
}
