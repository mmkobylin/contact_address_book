{{-- action is where we are moving --}}
<form action="/edit" method="POST">

    @csrf

    <input type="hidden" name = "id" value = {{ $data['id']}}>
    <input type="text" value = "{{ $data['salutation']}} " name="salutation">
    <input type="text" value = "{{ $data['first_name']}} " name="first_name">
    <input type="text" value = "{{ $data['middle_name']}} " name="middle_name">
    <input type="text" value = "{{ $data['last_name']}} " name="last_name">
    <input type="text" value = "{{ $data['date_of_birth']}} " name="date_of_birth">
    <input type="text" value = "{{ $data['address']}} " name="address">
    <input type="text" value = "{{ $data['postcode']}} " name="postcode">
    <input type="text" value = "{{ $data['city']}} " name="city">
    <input type="text" value = "{{ $data['email']}} " name="email">
    <input type="text" value = "{{ $data['tel']}} " name="tel">

    <button type = "submit">Update</button>


</form>