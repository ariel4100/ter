@extends('page.layouts.app')

@section('content')
    {{--@include('page.partials.carousel')--}}

    <div class="container my-5">
        <div class="row">
{{--            @dd($contenido)--}}
            <div class="col-md-6">
                <p class="m-0 ">{!! $contenido['subtitle'] ?? '' !!}</p>
                <h2 class="ter-color">{!! $contenido['title'] ?? '' !!}</h2>
                <p>
                    {!! $contenido['text_calidad'] ?? '' !!}
                </p>
            </div>
            <div class="col-md-6 d-flex align-items-center">
{{--                @dd($imagenes)--}}
                @forelse($imagenes['imagenes'] as $item)
                    <img src="{{ asset($item['image']) }}" alt="" class="img-fluid">
                @empty
                @endforelse
            </div>
        </div>
        <div class="row">
            @forelse($imagenes['archivos'] as $item)
{{--                @dd($item)--}}
                <div class="col-md-6 mt-5">
                    <a class="py-2 px-4 border d-block position-relative" style="background: #efefef" href="{{ asset($item['image']) }}" download>
                        <i class="fas fa-download position-absolute" style="color: #444; top: calc(50% - 14px); right: 15px;"></i>
                        <h3 class="mb-0" style="color:#C01939 !important; font-size: 20px;">{!! $item['title_es'] !!}</h3>
                        <p class="mb-0" style="font-size: 14px;">Ver documento</p>
                    </a>
                </div>
            @empty
            @endforelse
            {{--<div class="col-md-6">--}}
                {{--<a class="py-2 px-4 border d-block position-relative" style="background: #efefef" href="{{ asset('uploads/file/Certificato RINA ISO 9001 - 2019.pdf') }}" download>--}}
                    {{--<i class="fas fa-download position-absolute" style="color: #444; top: calc(50% - 14px); right: 15px;"></i>--}}
                    {{--<h3 class="mb-0" style="color:#C01939 !important; font-size: 20px;">ISO 9000:2015</h3>--}}
                    {{--<p class="mb-0" style="font-size: 14px;">Ver documento</p>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-md-6">--}}
                {{--<a class="py-2 px-4 border d-block position-relative" style="background: #efefef" href="{{ asset('uploads/file/Certificado IQNet 9001 - 2019.pdf') }}" download>--}}
                    {{--<i class="fas fa-download position-absolute" style="color: #444; top: calc(50% - 14px); right: 15px;"></i>--}}
                    {{--<h3 class="mb-0" style="color:#C01939 !important; font-size: 20px;">Política de Calidad TER</h3>--}}
                    {{--<p class="mb-0" style="font-size: 14px;">Ver documento</p>--}}
                {{--</a>--}}
            {{--</div>--}}
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                @gallery
                @slot('gallery',$imagenes['maquinas'])
                @slot('id',1)
                @endgallery
            </div>
            <div class="col-md-6">
                <h2 class="ter-color">{!! $contenido['title_laboratorio'] ?? '' !!}</h2>
                {!! $contenido['text_laboratorio'] ?? '' !!}
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h2 class="ter-color">{!! $contenido['title_maquina'] ?? '' !!}</h2>
                {!! $contenido['text_maquina'] ?? '' !!}
            </div>
            <div class="col-md-6">
                @gallery
                @slot('gallery',$imagenes['laboratorios'])
                @slot('id',2)
                @endgallery
            </div>
        </div>
    </div>

@endsection
