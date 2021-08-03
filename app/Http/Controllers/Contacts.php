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
        $data = Contact::all();
        return view('edit', ['data'=>$data]);
    }

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
