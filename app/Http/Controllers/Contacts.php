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

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response(null, 204);
    }
}
