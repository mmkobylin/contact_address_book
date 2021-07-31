@extends('app')

@section('title', 'Contacts')

@section('content')
    @foreach ( App\Models\Contact::all() AS $contact )

    <div>
        <h5> {{ $contact->id }} </h5>
    </div>

    @endforeach
        
@endsection
