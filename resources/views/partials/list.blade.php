{{-- catching no contacts --}}
@if (count($contacts) === 0 )
    <p>No contacts found</p>
@else 
    @foreach($contacts as $contact)
    <div class="list-group">
        <a href="/contacts/{{ $contact->id}}">
        
            <h5 class="names">{{$contact->last_name}}</h5>
        </a>
    </div>
    @endforeach 
@endif
