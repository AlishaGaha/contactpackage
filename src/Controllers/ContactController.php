<?php

namespace Robust\Contact\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Robust\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Robust\Contact\Mail\ContactMailable;

class ContactController extends Controller
{

    public function index()
    {
    	return view('contact::contact');//first contact is package name given in contactserviceprovider
    }

    public function contactsend(Request $request)
    {
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message, $request->name));
        //calling config/contact ko keyed array
        // Mail::to('gahaalisha13@gmail.com')->send(new ContactMailable($request->message, $request->name));
        //syntax for sending mail 
        //mail to ...user 
        //send from contactmailable where it call contactmailable with $request->message

    	Contact::create($request->all());
    	return redirect(route('contact')); 

    	// Contact::create([
    	// 	'name' => $request->input('name'),
    	// 	'email' => $request->input('email'),
    	// 	'message' => $request->input('message')
    	// ]);
    }
}
 