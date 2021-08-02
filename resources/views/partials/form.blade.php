{{-- action is where we are moving --}}
<form action="/add" method="POST">

    @csrf
    <label>Salutation</label>
    <input type="text" placeholder = "Enter Value" name="salutation">
    <br>
    <label>First name</label>
    <input type="text" placeholder = "Enter Value" name="first_name">
    <br>
    <label>Middle Name</label>
    <input type="text" placeholder = "Enter Value" name="middle_name">
    <br>
    <label>Last name</label>
    <input type="text" placeholder = "Enter Value" name="last_name">
    <br>
    <label>DOB</label>
    <input type="text" placeholder = "Enter Value" name="date_of_birth">
    <br>
    <label>Address</label>
    <input type="text" placeholder = "Enter Value" name="address">
    <br>
    <label>Post code</label>
    <input type="text" placeholder = "Enter Value" name="postcode">
    <br>
    <label>City</label>
    <input type="text" placeholder = "Enter Value" name="city">
    <br>
    <label>Email</label>
    <input type="text" placeholder = "Enter Value" name="email">
    <br>
    <label>Tel</label>
    <input type="text" placeholder = "Enter Value" name="tel">
    <br>
    <button type = "submit" >Add Contact</button>


</form>