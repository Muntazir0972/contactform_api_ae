<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class ContactFormController extends Controller
{
     // Store Contact Form data
     public function ContactForm(Request $request) {
 
        // Form validation
         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone'=>'required',
            'company'=>'required',
            'subject' => 'required',
            'message' => 'required'
         ]);
         if ($validator->fails()) { 
     return response()->json(['error'=>$validator->errors()], 401);            
 }
        //  Store data in database
        // Contact::create($request->all());
 
        //  Send mail to Application Admin
        \Mail::send('emails.contact', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'company' => $request->get('company'),
            'bodyMessage' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('mohammadmuntazir18@gmail.com', 'Admin')->subject($request->get('subject'));
        });
        return response()->json(['success' => 'The email has been sent.']);
    }
}
