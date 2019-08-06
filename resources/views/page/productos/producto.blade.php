@extends('page.layouts.app')
@push('style')
    <style>
        .col-md-4 .nav-link{
            color: #737384 !important;
        }
    </style>
@endpush
@section('content')
    {{--    @include('page.partials.carousel')--}}

    <div class="container my-5">
        <div class="row">
            {{--@dd($producto)--}}
            @include('page.partials.botonera')
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="ter-color">{!! $text['title'] ?? '' !!}</h2>
                        <p class="ter-colo">{!! $text['subtitle'] ?? '' !!}</p>
                        {!! $text['text'] ?? '' !!}
                    </div>
                </div>
                <div class="row ">
{{--                    @dd($producto->image['archivos'] )--}}
                    <div class="col-md-12 text-center">
                        @if(isset($producto->image['archivos']))
                            <a href="{{ asset($producto->image['archivos'][0]['image'] ?? '') }}" download class="btn rounded-circle text-white rounded-pill ter-fondo">FICHA TÉCNICA</a>
                        @endif
                        <a href="{{ route('contacto') }}" class="btn rounded-circle text-white rounded-pill ter-fondo">CONSULTAR</a>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-md-6 text-center">
                        {{--@dd($producto)--}}
                        @gallery
                        @slot('gallery',$producto->image['gallery'] ?? '')
                        @slot('id',1)
                        @endgallery
                    </div>
                    <div class="col-md-6 text-center">
                        @forelse($producto->image['imagenes'] ?? [] as $item)
                            <img src="{{ asset($item['image'])  ?? 'uploads/no-img.png'}}" alt="" class="img-fluid mt-4">
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-md-12">
                        <p class="text-uppercase p-2 ter-color font-weight-bold" style="background-color: #F9F9F9">{!! $text['title_car'] ?? '' !!}</p>
                    </div>
                    <div class="col-md-12 ">
                        {!! $text['caracteristica'] ?? '' !!}
                    </div>
                    <div class="col-md-12">
                        <div class="border-bottom d-flex justify-content-between align-items-center">
                            <p class="m-0 py-2">{!! $text['relacionados'] ?? '' !!}</p>
                            <span class="ter-color">+</span>
                        </div>
                        <div class="row">
                            @foreach($producto->related as $item)
                                {{--@dd($item)--}}
                                <div class="col-md-4 mt-4">
                                    <div class="">
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset($item->image['gallery'][0]['image'] ?? 'uploads/no-img.png') }}" alt="Card image cap">
                                        </div>
                                        <div class="p-3 bg-white">
                                            <h4 class="ter-color">
                                                {!! $item->text[App::getLocale()]{'title'} ?? '' !!}
                                            </h4>
                                            <p class="">
                                                {!! $item->text[App::getLocale()]{'subtitle'} ?? '' !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
