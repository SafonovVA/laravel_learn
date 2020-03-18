<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(/*Request $request*/ContactRequest $request)
    {
        /*$validation = $request->validate([
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:5|max:50',
        ]);*/

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Successfully added to database');

    }

    public function updateMessageSubmit($id, ContactRequest $request)
    {

        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Successfully updated on database');

    }

    public function allData()
    {
        return view('messages', [
            'data' => Contact::all()
        ]);
    }

    public function showOneMessage($id)
    {
        return view('one-message', [
            'data' => Contact::find($id)
        ]);
    }

    public function updateMessage($id)
    {
        return view('update-message', [
            'data' => Contact::find($id)
        ]);
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();

        return redirect()->route('contact-data')->with('success', 'Successfully deleted from database');

    }
}
