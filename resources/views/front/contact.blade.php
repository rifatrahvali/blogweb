@extends("layouts.front")

@section("css")

@endsection

@section("icerik")
<div class="col-8 mx-auto">
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
    <hr>
    front - iletişim 2 blade php
    <hr>
    <form action="{{ route('user',['id'=>5]) }}" method="post">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        {{-- csrf - formdan gelen istek bizim sitemizden mi geliyor --}}

        <input type="text" name="fullname" id="fullname" class="form-control">
        <input type="email" name="email" id="email" class="form-control">
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>

    front - destek 3 blade php
    <hr>
    <form action="{{ route('support-form.support') }}">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        {{-- csrf - formdan gelen istek bizim sitemizden mi geliyor --}}

        <input type="text" name="fullname" id="fullname" class="form-control">
        <input type="email" name="email" id="email" class="form-control">
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
</div>
@endsection

@section("js")

@endsection