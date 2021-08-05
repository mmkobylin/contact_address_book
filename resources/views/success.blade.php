@extends("app")

    {{-- in section - we are naming section, and second varialbe is an actual name --}}
    @section("title", "Action successful!")

    {{-- pulls content from the partials --}}
    @section("content")
        <p>Thank you for using out Contact Book</p>
    @endsection