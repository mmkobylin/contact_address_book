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

    function modify(Request $request)
    {
        return $request->input();
    }
}
