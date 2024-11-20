@extends("layout")

@section("nazivStranice")
    Moj Sajt
@endsection


@section("sadrzajStranice")
    <p class="text-danger ">Trenutno vrijeme je {{ date("h:i:s") }}</p>
@endsection


