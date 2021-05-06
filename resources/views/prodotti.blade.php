@extends('layout.app')

@section('title_page','Prodotti')

@section('content')
    <div class="container container_pasta_list flex">
        @foreach ($pasta_list as $pasta)
            <div class="pasta-card">
                <img src="{{$pasta['src']}}" alt="">
            </div>
        @endforeach
    </div>
@endsection