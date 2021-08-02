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

    public function deactive(Request $request, $id)
    {
        $data = Contact::find($id);        

        $data->active = false;
        
        $data->save();

        return view('success');
    }

    public function active(Request $request, $id)
    {
        $data = Contact::find($id);        

        $data->active = true;
        
        $data->save();

        return view('success');
    }


    function showContact($id)
    {
        $data = Contact::find($id);
        $data->save();
        return view('edit', ['data'=>$data]);
    }

    function create(Request $request)
    {
        $data = new Contact;
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
    
        return view('success');
    }

}
