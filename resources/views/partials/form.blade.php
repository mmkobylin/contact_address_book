@extends('app')

    
    @section("title", "Add contact")
    
    @section("content")
    
        <form method="post" class="form card">
            <fieldset class="card-body">
            @csrf
                <div class="form-group @error('title') is-invalid @enderror">
                    @error("salutation")
                        <p class="all fields required">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="first_name">Salutation</label>
                    <input id="first_name" name="first_name" class="form-control" />
                </div>
                <div class="form-group @error('title') is-invalid @enderror>
                    @error("first_name")
                        <p class="all fields required">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="first_name">First Name</label>
                    <input id="first_name" name="first_name" class="form-control" value="{{ old("first_name") }}" />
                </div>
                <div class="form-group @error('title') is-invalid @enderror>
                    @error("middle_name")
                        <p class="all fields required">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="middle_name">Middle Name</label>
                    <input id="middle_name" name="middle_name" class="form-control" />
                </div>
                <div class="form-group @error('title') is-invalid @enderror">
                    @error("last_name")
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="last_name">Last Name</label>
                    <input id="last_name" name="last_name" class="form-control" value="{{ old("last_name") }}"" />
                </div>
                <div class="form-group @error('title') is-invalid @enderror">
                    @error("telephone")
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                    @enderror
                    <label for="telephone">Telephone</label>
                    <input id="telephone" name="telephone" class="form-control" />
                </div>
                        <div class="form-group @error('title') is-invalid @enderror>
                             @error("telephone")
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                            <label for="telephone">Telephone</label>
                            <input id="telephone" name="telephone" class="form-control" />
                        </div>
                        <div class="form-group @error('title') is-invalid @enderror>
                            @error("email")
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                            <label for="email">Email</label>
                            <input id="email" name="email" class="form-control" value="{{ old("email") }}" />
                        </div>
                        <div class="form-group @error('title') is-invalid @enderror>
                            @error("address_1")
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                            <label for="address_1">First line of address</label>
                            <input id="address_1" name="address_1" class="form-control" value="{{ old("address_1") }}" />
                        </div>
                        <div class="form-group @error('title') is-invalid @enderror>
                             @error("address_2")
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                            <label for="address_2">Second line of address</label>
                            <input id="address_2" name="address_2" class="form-control" value="{{ old("address_2") }}" />
                        </div>
                        <div class="form-group @error('title') is-invalid @enderror>
                             @error("postcode")
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                            <label for="postcode">Postcode</label>
                            <input id="postcode" name="postcode" class="form-control" value="{{ old("postcode") }}" />
                        </div>
                        <div class="form-group @error('title') is-invalid @enderror>
                            @error("Town")
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                            <label for="town">Town</label>
                            <input id="town" name="town" class="form-control" value="{{ old("town") }}" />
                        </div>
                    </fieldset>
                    <div class="card-footer text-right">
                        <button class="btn btn-success">Send</button>
                    </div>
                </form>
    @endsection