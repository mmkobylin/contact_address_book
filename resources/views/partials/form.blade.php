{{-- action is where we are moving --}}

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


<form action="add" method="POST">

    @csrf
    <fieldset>
        <div>
            <label for="salutation">Salutation *</label>
            <select name="salutation">
                <option value="Miss">Miss</option>
                <option value="Mrs">Mrs</option>
                <option value="Mx">Mx</option>
                <option value="Mr">Mr</option>
            </select>
        </div>
        <div>
            <label for="first_name">First Name *</label>
            <input id="first_name" name="first_name" class="form-control" value="{{ old("first_name") }}" />
        </div>
        <div>
            <label for="middle_name">Middle Name</label>
            <input id="middle_name" name="middle_name" class="form-control" value="{{ old("middle_name") }}" />
        </div>
        <div>
            <label for="last_name">Last Name *</label>
            <input id="last_name" name="last_name" class="form-control" value="{{ old("last_name") }}" />
        </div>
        <div>
            <label for="date_of_birth">Date of Birth</label>
            <input id="date_of_birth" name="date_of_brith" type = "date" class="form-control" value="{{ old("address") }}" />
        </div>
        <div>
            <label for="address">Address</label>
            <input id="address" name="address" class="form-control" value="{{ old("address_1") }}" />
        </div>
        <div>
            <label for="city">City</label>
            <input id="city" name="city" class="form-control" value="{{ old("city") }}" />
        </div>

        <div>
            <label for="postcode">Postcode *</label>
            <input id="postcode" name="postcode" class="form-control" value="{{ old("postcode") }}" />
        </div>

        <div>
            <label for="tel">Telephone</label>
            <input id="tel" name="tel" type = "integer" class="form-control" value="{{ old("tel") }}" />
        </div>

        <div>
            <label for="email">Email *</label>
            <input id="email" name="email" class="form-control" value="{{ old("email") }}" />
        </div>
    </fieldset>
    <button type = "submit" >Add Contact</button>
</form>

