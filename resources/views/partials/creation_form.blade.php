{{-- displaying errors --}}
@if ( $errors->any()) 
    <div class="errors">
        @foreach ($errors->all() as $error) 

            <li>
                {{ $error }}
            </li>
            
        @endforeach
    </div>
@endif

<p>Fields with * are required</p>

{{-- displaying form --}}
<form action="add" method="POST">

    @csrf
    <fieldset>
            <label for="salutation">Salutation *</label>
            <select name="salutation">
                <option value="Miss">Miss</option>
                <option value="Mrs">Mrs</option>
                <option value="Mx">Mx</option>
                <option value="Mr">Mr</option>
            </select>
      
            <label for="first_name">First Name *</label>
            <input id="first_name" name="first_name" class="form-control" value="{{ old("first_name") }}" />
      
            <label for="middle_name">Middle Name</label>
            <input id="middle_name" name="middle_name" class="form-control" value="{{ old("middle_name") }}" />
      
            <label for="last_name">Last Name *</label>
            <input id="last_name" name="last_name" class="form-control" value="{{ old("last_name") }}" />
      
            <label for="date_of_birth">Date of Birth</label>
            <input id="date_of_birth" name="date_of_birth" type = "date" class="form-control" value="{{ old("address") }}" />
      
            <label for="address">Address</label>
            <input id="address" name="address" class="form-control" value="{{ old("address_1") }}" />
      
            <label for="city">City *</label>
            <input id="city" name="city" class="form-control" value="{{ old("city") }}" />
 
            <label for="postcode">Postcode *</label>
            <input id="postcode" name="postcode" class="form-control" value="{{ old("postcode") }}" />
   
            <label for="tel">Telephone</label>
            <input id="tel" name="tel" type = "integer" class="form-control" value="{{ old("tel") }}" />

            <label for="email">Email *</label>
            <input id="email" name="email" class="form-control" value="{{ old("email") }}" />
    </fieldset>
    <button type = "submit" >Add Contact</button>
</form>

