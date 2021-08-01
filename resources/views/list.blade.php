@extends("app")

{{-- in section - we are naming section, and second varialbe is an actual name --}}
@section("title", "Contacts")

{{-- pulls content from the partials --}}
@section("content")
    <table border='1'>
        <tr>
            <td>Id</td>
            <td>Email</td>
            <td>Name</td>
            <td>Address</td>
        </tr>
    </table>

    @if (count($contacts) === 0 )
    <p>No contacts found</p>
    @else 
        @foreach($contacts as $contact)
        <div class="list-group">
            <a href="/contacts/{{ $contact->id}}"></a>
            <h5>{{$contact->fullName()}}</h5>
            <p>{{$contact->fullAddress()}}</p>
            <p>{{$contact->email}}</p>
            <p>{{$contact->tel}}</p>
        </div>
        @endforeach 
    @endif


@endsection