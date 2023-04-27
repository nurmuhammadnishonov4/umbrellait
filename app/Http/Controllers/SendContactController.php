<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Senduser;
use Illuminate\Http\Request;

class SendContactController extends Controller
{
    public function sendContact(Request $request)
    {
        $contact = new Senduser();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->save();

        return redirect()->back()->with('send','Sizning xabaringiz yuborildi');
    }

    public function sendMessage(Request $request)
    {
        $message = new Contact();
        $message->name = $request->name;
        $message->age = $request->age;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->save();

        return redirect()->back()->with('send','Sizning xabaringiz yuborildi');
    }


}
