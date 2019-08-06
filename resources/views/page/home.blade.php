@extends('page.layouts.app')

@push('style')
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
    <style>
        .multiple-items img {
            width: 100px !important;
        }
        .multiple-items .slick-slide > div {
            display: flex;
            justify-content: center!important;
            align-items: center!important;
            height: 100px;
        }
    </style>
@endpush
@section('content')
    @include('page.partials.carousel')

    <div class="w-100 py-5" style="background-color: #9F142E">
        <div class="container text-center">
            <h2 class="text-white">{!! $contenido['title'] ?? '' !!}</h2>
            <form action="" class="row justify-content-center">
                <div class="col-md-5 input-group my-3">
                    <input type="text" class="form-control" placeholder="Buscar nombre, código, marca..." aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-search" style="color: #D33538;" aria-hidden="true"></i></span>
                    </div>
                </div>
            </form>
            <div class="row mt-3">
                @forelse($familias as $item)
                    {{--@dd($item)--}}
                <div class="col-md-3 mt-5">
                    <a href="{{ route('marcas',$item->id) }}" class="">
                        <img src="{{ asset($item->image[0]['image'] ?? 'uploads/no-img.png') }}" alt="" class="img-fluid">
                        <p class="mb-0 text-center text-white mt-2" style="font-size: 18px; font-weight: 500">{{$item["text"][App::getLocale()]["title"]}}</p>
                    </a>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-white ter-color my-5">{!! $contenido['servicio'] ?? '' !!}</h2>
                @forelse($imagenes['servicios'] as $item)
                <div class="d-flex align-items-center mt-3">
                    <img src="{{ asset($item['image']) }}" alt="" class="img-fluid">
                    <p class="ml-3">{!! $item['title_'.App::getLocale()] !!}</p>
                </div>
                @empty
                @endforelse
            </div>
            <div class="col-md-6 d-flex align-items-center">
                @forelse($imagenes['imagenes'] as $item)
                    <img src="{{ asset($item['image']) }}" alt="" class="img-fluid">
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <div class="container my-5" style="width: 80%">
        <h2 class="text-center my-5 ter-color">{!! $contenido['marcas'] ?? '' !!}</h2>
        <div class="multiple-items ">
            @forelse($imagenes['marcas'] as $item)
                <img src="{{ asset($item['image']) }}" alt="" class="">
            @empty
            @endforelse
        </div>
    </div>

@endsection
@push('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    <script>
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    arrows: true,
                    centerMode: true,
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    arrows: true,
                    centerMode: true,
                    slidesToShow: 1
                  }
                }
            ]
        });

    </script>
@endpush