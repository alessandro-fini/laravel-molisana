@extends('layouts.app')

@section('title', 'I nostri prodotti')

@section('content')
    <div class="container">
        <div class="products-container">
            @foreach ($formati as $key => $formato)
                @if ($key == 'lunga')
                    <h2>le lunghe</h2>                        
                @elseif ($key == 'corta')
                    <h2>le corte</h2>
                @else 
                    <h2>le cortissime</h2>
                @endif
                @foreach ($formato as $k => $item)
                    <div class="cards">
                        <img src="{{ $item['src'] }}" alt="">
                        <div class="layover">
                            <a href="{{ route('specifics-page', ['id' => $k]) }}">{{ $item['titolo'] }}</a>
                        </div>
                    </div>
                @endforeach            
            @endforeach
        </div>
    </div>
@endsection

{{-- <div class="cards">
    <img src="{{ $formato['src'] }}" alt="">
    <div class="layover">
        <a href="{{ route('specifics-page', ['id' => $key]) }}">{{ $formato['titolo'] }}</a>
    </div>
</div> --}}