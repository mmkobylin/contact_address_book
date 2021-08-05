@extends("app")

    {{-- in section - we are naming section, and second variable is an actual name --}}
    @section("title", "Change Details")

    @section("content")
        @include ("partials/edit_form")
    @endsection

        public function showContact($id)
    {
        $data = Contact::find($id);
        return view('edit', ['data'=>$data]);
    }
