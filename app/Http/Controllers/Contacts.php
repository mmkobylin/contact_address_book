<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class Contacts extends Controller
{
    public function showAll()
    {
        $data = Contact::all();
        return view ( 'list', ['contacts' => $data ] );
    }

<<<<<<< HEAD
    public function deactive(Request $request, $id)
    {
        $data = Contact::find($id);        

        $data->active = false;
        
=======
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
        
>>>>>>> feature/form-modification
        $data->save();

        return view('success');
    }

<<<<<<< HEAD
    public function active(Request $request, $id)
    {
        $data = Contact::find($id);        

        $data->active = true;
        
        $data->save();

        return view('success');
    }


    function showContact($id)
=======
    public function showContact($id)
>>>>>>> feature/form-modification
    {
        $data = Contact::all();
        return view('edit', ['data'=>$data]);
    }

<<<<<<< HEAD
=======
    public function create()
    {
        return view("form");
    }

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

>>>>>>> feature/form-modification
    public function store(Request $request)
    {
        $this->validate($request, [
        'salutation' => 'required|string',
        'first_name'=> 'required|string',
        'middle_name'=> 'required|string',
        'last_name'=> 'required|string',
        'date_of_birth',
        'address'=> 'required|string', 
        'city'=> 'required|string',
        'postcode' => 'required',
        'tel' => 'max:11', 
        'email'=> 'required|string' 
        ]); 
        
<<<<<<< HEAD
=======
        return view('success');
>>>>>>> feature/form-modification
    }

    public function modify(Request $request)
    {

        $request->validate([
            'salutation' => 'required | max:20',
            'first_name' => 'required | max:20',
            'middle_name' => 'max:20',
            'last_name' => 'required | max:20',
            'date_of_birth' => 'before:now',
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

}
