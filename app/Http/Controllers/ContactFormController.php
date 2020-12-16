<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormSendRequest;
use App\Jobs\SendEmailJob;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function send(ContactFormSendRequest $request){
        $details=[
            "email"=>$request->email,
            "name"=>$request->name,
            "message"=>$request->message
        ];
        $result = dispatch(new SendEmailJob($details));

        return redirect()->back()->with(['message' => 'Email send successfully']);
    }
}
