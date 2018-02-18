<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $message = $request->input('message');

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phonenumber' => 'required'
        ]);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $content = [
            'name' => $name,
            'phonenumber' => $phonenumber,
            'email' => $email,
            'message' => $message
        ];

//        Mail::to(env('MAIL_USERNAME'))->send(new Contact($content));
        Mail::to('eng.mhd.bitar@gmail.com')->send(new Contact($content));

        \Session::flash('contact_success_message', trans('car.frontend.messages.success.contact_us'));

        return Redirect::route('frontend.contact');
    }
}
