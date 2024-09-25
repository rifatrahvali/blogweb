@extends("layouts.front")

@section("css")

@endsection

@section("icerik")
<hr>
front - iletişim blade php
<hr>
<form action="{{route('contact')}}" method="post">
    @csrf
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
    {{-- csrf - formdan gelen istek bizim sitemizden mi geliyor --}}

    <input type="text" name="fullname" id="fullname" class="form-control">
    <input type="email" name="email" id="email" class="form-control">
    <button type="submit" class="btn btn-primary">Gönder</button>
</form>
@endsection

@section("js")

@endsection