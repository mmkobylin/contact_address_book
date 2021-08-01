{{-- action is where we are moving --}}
<form action="/add" method="POST">

    @csrf
    <label>Salutation</label>
    <input type="text" placeholder = "Enter Value" name="salutation">
    <label>First name</label>
    <input type="text" placeholder = "Enter Value" name="first_name">
    <label>Middle Name</label>
    <input type="text" placeholder = "Enter Value" name="middle_name">
    <label>Last name</label>
    <input type="text" placeholder = "Enter Value" name="last_name">
    <label>DOB</label>
    <input type="text" placeholder = "Enter Value" name="date_of_birth">
    <label>Address</label>
    <input type="text" placeholder = "Enter Value" name="address">
    <label>Post code</label>
    <input type="text" placeholder = "Enter Value" name="postcode">
    <label>City</label>
    <input type="text" placeholder = "Enter Value" name="city">
    <label>Email</label>
    <input type="text" placeholder = "Enter Value" name="email">
    <label>Tel</label>
    <input type="text" placeholder = "Enter Value" name="tel">

    <button type = "submit" >Add Contact</button>


</form>