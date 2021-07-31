@extends("app")

    {{-- in section - we are naming section, and second varialbe is an actual name --}}
    @section("title", "Contacts Book")

    {{-- pulls content from the partials --}}
    @section("content")
        @include ("partials/main")
        @include("partials/list")
    @endsection