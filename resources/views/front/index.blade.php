{{-- türet --}}
@extends("layouts.front")

@section("css")

@endsection

@section("icerik")
<hr>
front - index blade php

{{-- YAŞ : {{ $age ?? "Yaş değeri controller'dan gelmedi." }} --}}
{{-- isim : {{ $isim ?? "isim değeri controller'dan gelmedi." }} --}}


YAŞ : {{ $age ?? $person->age }} 
isim : {{ $person->name ?? "isim yok" }}


<hr>
@endsection

@section("js")

@endsection