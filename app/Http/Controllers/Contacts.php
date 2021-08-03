<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class Contacts extends Controller
{
    function show()
    {
        $data = Contact::all();
        return view ( 'list', ['contacts' => $data ] );
    }

    function destroy($id)
    {
        $data = Contact::find($id);
        $data->delete();
        return view('list');
    }

    function showContact($id)
    {
        $data = Contact::find($id);
        return view('edit', ['data'=>$data]);
    }

    public function create()
    {
    return view("form");
    }

    public function createContact(Request $request)
    {
        $request-> validate([
            'salutation' => 'required' | 'max:20', 
            'first_name' => 'required' | 'max:30', 
            'middle_name' => 'max:30', 
            'last_name' => 'required' | 'max:30', 
            'date_of_birth',
            'address' => 'required' | 'max:50', 
            'city' => 'required' | 'max:30', 
            'postcode' => 'required' | 'max:10', 
            'tel' => 'max:11', 
            'email' => 'required' | 'max:20', 
        ])

        // get all of the submitted data
        $contact = Contact::create([
            
        ])
        return redirect("/");
    }


    function store(Request $request)
    {
        $contact = new Contact;
        $contact->salutation=$request->salutation;
        $contact->first_name=$request->first_name;
        $contact->middle_name=$request->middle_name;
        $contact->last_name=$request->last_name;
        $contact->date_of_birth=$request->date_of_birth;
        $contact->address=$request->address;
        $contact->city=$request->city;
        $contact->postcode=$request->postcode;
        $contact->tel=$request->tel;
        $contact->email=$request->email;
        $contact->save();
        
        return view('list');
    }

    function modify(Request $request)
    {
        $data = Contact::find($request->id);
        $data->salutation=$request->salutation;
        $data->first_name=$request->first_name;
        $data->middle_name=$request->middle_name;
        $data->last_name=$request->last_name;
        $data->date_of_birth=$request->date_of_birth;
        $data->address=$request->address;
        $data->city=$request->city;
        $data->postcode=$request->postcode;
        $data->tel=$request->tel;
        $data->email=$request->email;
        $data->save();
    
        return redirect('list');
    }

}
