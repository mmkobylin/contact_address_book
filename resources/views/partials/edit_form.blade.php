{{-- action is where we are moving --}}
{{-- displaying possible errors --}}
@if ( $errors->any()) 
    <div class="errors">
        @foreach ($errors->all() as $error) 

            <li>
                {{ $error }}
            </li>
            
        @endforeach
    </div>
@endif

{{-- form containing currect values --}}
<form action="/edit" method="POST">

    {{-- safety token --}}
    @csrf
    <fieldset class='edit'>

        <input type="hidden" name = "id" value = {{ $data['id']}}>

        <label for="salutation">Salutation</label>
        <input type="text" value = "{{ $data['salutation']}} " name="salutation">
        
        <label for="first_name">First Name</label>
        <input type="text" value = "{{ $data['first_name']}} " name="first_name">

        <label for="middle_name">Middle Name</label>
        <input type="text" value = "{{ $data['middle_name']}} " name="middle_name">

        <label for="last_name">Last Name</label>
        <input type="text" value = "{{ $data['last_name']}} " name="last_name">

        <label for="date_of_birth">Date of Birth</label>
        <input type="date" value = "{{ $data['date_of_birth']}} " name="date_of_birth">

        <label for="address">Address</label>
        <input type="text" value = "{{ $data['address']}} " name="address">

        <label for="city">City</label>
        <input type="text" value = "{{ $data['city']}} " name="city">

        <label for="postcode">Postcode</label>
        <input type="text" value = "{{ $data['postcode']}} " name="postcode">

        <label for="tel">Telephone</label>
        <input type="text" value = "{{ $data['tel']}} " name="tel">

        <label for="email">Email</label>
        <input type="text" value = "{{ $data['email']}} " name="email">
    </fieldset>

    <button type = "submit">Update</button>


</form>