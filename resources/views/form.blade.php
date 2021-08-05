@extends("app")

    {{-- in section - we are naming section, and second varialbe is an actual name --}}
    @section("title", "Add Contact")

    {{-- pulls content from the partials --}}
    @section("content")
        @include ("partials/creation_form")
    @endsection