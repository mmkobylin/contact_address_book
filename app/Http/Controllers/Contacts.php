<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class Contacts extends Controller
{

    // view form
    public function create()
    {
        return view("form");
    }

    // saving data
    public function createContact(Request $request)
    {

        $request->validate([
            'salutation' => 'required | max:20',
            'first_name' => 'required | max:20',
            'middle_name' => 'max:20',
            'last_name' => 'required | max:20',
            'address' => 'max:50',
            'city' => 'required | max:20',
            'postcode' => 'required | max:20',
            'email' => 'required | email:rfc,dns'
        ]);

        // if passed validation

        $data = Contact::create([
            'salutation' => $request->input('salutation'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'postcode' => $request->input('postcode'),
            'tel' => $request->input('tel'),
            'email' => $request->input('email')
        ]);

        return view("success");
    }

    // fetch data to modify
    public function showContact($id)
    {
        $data = Contact::find($id);
        return view('edit', ['data'=>$data]);
    }

    // change data
    public function modify(Request $request)
    {

        $request->validate([
            'salutation' => 'required | max:20',
            'first_name' => 'required | max:20',
            'middle_name' => 'max:20',
            'last_name' => 'required | max:20',
            'address' => 'max:50',
            'city' => 'required | max:20',
            'postcode' => 'required | max:20',
            'email' => 'required | email:rfc,dns'
        ]);

        // if passed validation:
            
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
    
        return view('success');
    }

    // display
    public function showAll()
    {
        $data = Contact::all();
        return view ( 'list', ['contacts' => $data ] );
    }

    // displays active ones!
    public function showActive() 
    {
        $data = Contact::where('active', true)
        ->get();
        return view ( 'list', ['contacts' => $data ] );
    }

    public function deactivate(Request $request, $id)
    {
        // find data
        $data = Contact::find($id);        

        // change to false
        $data->active = false;
        
        // save it
        $data->save();

        //return it
        return view('success');
    }

    public function activate(Request $request, $id)
    {
        $data = Contact::find($id);        

        $data->active = true;
        
        $data->save();

        return view('success');
    }

}
