@extends("app")

    @section("title"){{
        "Contacts"
    }}@endsection

    {{-- pulls content from the partials --}}
    @section("content")
        @include ("partials/main")
        @include("partials/list")
    @endsection