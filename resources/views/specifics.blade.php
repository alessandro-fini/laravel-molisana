@extends('layouts.app')

@section('title', $formati['titolo'].' - La Molisana')

@section('ico')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection

@section('content')
    <div class="specifics">
        <h1>{{ $formati['titolo'] }}</h1>
        <img src="{{ $formati['src-h'] }}" alt="{{ $formati['titolo'] }}">
        <div class="description container">
            <p>{!! $formati['descrizione'] !!}</p>
            <div class="ico">
                <span>Tipologia: {{ $formati['tipo'] }}</span>
                <i class="fas fa-clock"></i>
                <span>{{ $formati['cottura'] }}</span>
                <i class="fas fa-balance-scale-right"></i>
                <span>{{ $formati['peso'] }}</span>
            </div>
        </div>
        <img src="{{ $formati['src-p'] }}" alt="{{ $formati['titolo'] }}">
    </div>
@endsection