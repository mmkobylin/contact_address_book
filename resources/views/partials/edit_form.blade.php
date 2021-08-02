{{-- action is where we are moving --}}
<form action="/edit" method="POST">

    @csrf

    <input type="hidden" name = "id" value = {{ $data['id']}}>
    <label>Salutation</label>
    <input type="text" value = "{{ $data['salutation']}} " name="salutation">
    <br>
    <label>First Name</label>
    <input type="text" value = "{{ $data['first_name']}} " name="first_name">
    <br>
    <label>Middle Name</label>
    <input type="text" value = "{{ $data['middle_name']}} " name="middle_name">
    <br>
    <label>Last Name</label>
    <input type="text" value = "{{ $data['last_name']}} " name="last_name">
    <br>
    <label>Date of birth</label>
    <input type="text" value = "{{ $data['date_of_birth']}} " name="date_of_birth">
    <br>
    <label>Address</label>
    <input type="text" value = "{{ $data['address']}} " name="address">
    <br>
    <label>Postcode</label>
    <input type="text" value = "{{ $data['postcode']}} " name="postcode">
    <br>
    <label>City</label>
    <input type="text" value = "{{ $data['city']}} " name="city">
    <br>
    <label>Email</label>
    <input type="text" value = "{{ $data['email']}} " name="email">
    <br>
    <label>Telephone</label>
    <input type="text" value = "{{ $data['tel']}}" name="tel">
    <br>
    <button type = "submit">Update</button>


</form>