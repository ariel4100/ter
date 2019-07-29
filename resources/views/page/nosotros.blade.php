@extends('page.layouts.app')

@section('content')
    @include('page.partials.carousel')

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
{{--                @dd($imagenes['imagenes'])--}}
                <h2 class="ter-color">{!! $contenido['title'] !!}</h2>
                {!! $contenido['text'] !!}
            </div>
            <div class="col-md-4">
                <img src="{{ asset($imagenes['imagenes'][0]['image']) }}" alt="" class="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/{{ $imagenes['video'][0]['video'] ?? '' }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <h2 class="" style="color: #D33538;">Seguinos en nuestro
                    canal de YouTube</h2>
            </div>
        </div>
    </div>

@endsection
