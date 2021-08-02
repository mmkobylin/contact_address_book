@extends("app")

{{-- in section - we are naming section, and second varialbe is an actual name --}}
@section("title", "Contacts")

{{-- pulls content from the partials --}}
@section("content")

    @if (!is_countable($contacts ?? '') || count($contacts ?? '') === 0 )
    <p>No contacts found</p>

    @else 
        <table border='1'>
            <tr>
                <td>ID</td>
                <td>Salutation</td>
                <td>Name</td>
                <td>Address</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Active</td>
                <td>Edit</td>
                <td>Change Status</td>
            </tr>
            @foreach($contacts ?? '' as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->salutation}}</td>
                <td>{{$contact->fullName()}}</td>
                <td>{{$contact->fullAddress()}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->tel}}</td>
                <td>{{$contact->active}}</td>
                <td><a href={{"edit/".$contact['id']}}>Edit</a></td>

                <td>
                    @if ($contact->active) 
                    
                    <a href={{"deactive/".$contact['id']}}>Deactivate</a></td>
                    
                    @else

                    <a href={{"active/".$contact['id']}}>Activate</a>
                    
                    @endif
                </td>
                
            </tr>
            @endforeach
        </table> 
    @endif

@endsection