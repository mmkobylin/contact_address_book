@extends("app")

{{-- in section - we are naming section, and second varialbe is an actual name --}}
@section("title", "Contacts")

{{-- pulls content from the partials --}}
@section("content")

    @include("partials/list")
    @include("partials/link_all")

@endsection