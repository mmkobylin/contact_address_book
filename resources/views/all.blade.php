@extends("app")

{{-- in section - we are naming section, and second varialbe is an actual name --}}
@section("title", "All Contacts")

{{-- pulls content from the partials --}}
@section("content")

    @include("partials/list_display")

@endsection