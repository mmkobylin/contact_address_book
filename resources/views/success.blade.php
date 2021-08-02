@extends("app")

    {{-- in section - we are naming section, and second varialbe is an actual name --}}
    @section("title", "Your action was successful!")

    {{-- pulls content from the partials --}}
    @section("content")
        <p>Thank you for using our contact book!</p>
    @endsection