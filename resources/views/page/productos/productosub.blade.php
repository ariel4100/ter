@extends('page.layouts.app')
@push('style')
    <style>
        .nav-link{
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
                    <div class="col-md-12 text-center">
                        <a href="" class="btn rounded-circle text-white rounded-pill ter-fondo">FICHA TÉCNICA</a>
                        <a href="" class="btn rounded-circle text-white rounded-pill ter-fondo">CONSULTAR</a>
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
                        @forelse($producto->image['imagenes'] as $item)
                            <img src="{{ asset($item['image'])  ?? 'uploads/no-img.png'}}" alt="" class="img-fluid mt-4">
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-md-12">
                        <p class="text-uppercase p-2 ter-color" style="background-color: #F9F9F9">{!! $text['title_car'] ?? '' !!}</p>
                    </div>
                    <div class="col-md-12 ">
                        {!! $text['caracteristica'] ?? '' !!}
                    </div>
                    <div class="col-md-12">
                        <p class="p-2 border-bottom">{!! $text['relacionados'] ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
