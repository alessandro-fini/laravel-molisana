@extends('layouts.app')

@section('title', 'I nostri prodotti')

@section('content')
    <div class="container">
        <div class="products-container">
            @foreach ($formati as $key => $formato)
                <div class="cards">
                    <img src="{{ $formato['src'] }}" alt="">
                    <div class="layover">
                        <a href="{{ route('specifics-page', ['id' => $key]) }}">{{ $formato['titolo'] }}</a>
                    </div>
                </div>                
            @endforeach
        </div>
    </div>
@endsection