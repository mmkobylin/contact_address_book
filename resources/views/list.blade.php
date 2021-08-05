@extends("app")

{{-- in section - we are naming section, and second variable is an actual name --}}
@section("title", "Active Contacts")

{{-- pulls content from the partials --}}
@section("content")

    @include("partials/list_display")
    @include("partials/link_all")

@endsection