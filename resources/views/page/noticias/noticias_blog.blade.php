@extends('page.layouts.app')

@section('content')

    <div class="container mt-5"  >
        <h2 class="  ter-color">{{ __('Noticias') }}</h2>

    <div class="row my-5">
        <nav class="col-md-12">
            <ol class="list-unstyled d-flex">
                <li class=""><a href="{{ route('noticias') }}" style="color: unset;" class="text-decoration-none">{{ __('News') }}</a></li>
                @if(isset($news->category))
                    <li class="ml-2"><a href="{{ route('show_noticias',$news->category->id) }}" style="color: unset;" class="text-decoration-none">{{ '| '.$noticia->category->text[App::getLocale()]{'title'} ?? '' }}</a></li>
                @endif
                @if(isset($news))
                    {{--{{ $f->text{'title_es'} }}--}}
                    <li class="ml-2"><a href="" style="color: unset;" class="text-decoration-none">{{ '| '. $news['title'] }}</a></li>
                @endif
            </ol>
        </nav>
        <div class="col-md-8">
            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
{{--                    @dd($imagenes)--}}
                @forelse($imagenes as $k=>$item)
                        <li data-target="#carousel-example-1z" data-slide-to="{{ $k }}" ></li>
                @empty
                @endforelse
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    @forelse($imagenes as $k=>$item)
                    <div class="carousel-item {{ $k==0 ? 'active' : '' }}">

                        <img class="d-block w-100" src="{!! asset('uploads/'.$item{'image'}) !!}"
                             alt="First slide">
                    </div>
                    @empty
                        <div class="carousel-item active text-center" style="height: 500px;">
                            <img class="img-fluid" src="{!! asset('uploads/no-img.png') !!}"
                                 alt="First slide">
                        </div>
                    @endforelse
                </div>
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--/.Carousel Wrapper-->
            <h5>
                <span class="p-2 my-3 text-uppercase font-weight-bold badge ter-fondo">{!! $noticia->category->text[App::getLocale()]{'title'} ?? '' !!}</span>
            </h5>
            <h3 class="mb-4 font-weight-bold ter-color">{!! $news['title'] ?? '' !!}</h3>
            <div style="/*font-family: Montserrat Light;*/">
                {!! $news['text'] !!}
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="p-5" style="background-color: #F9F9F9">
                <h5 class="text-uppercase">{{ __('CATEGORIES') }}</h5>
                <hr align="left" class="" style="background-color: #595959; width: 70px">
                @forelse($categorias as $c)
                    <p class="m-0"><a href="{{ route('show_noticias',$c->id) }}" class="" style="text-decoration: none; color: unset;"> {!! $c->text[App::getLocale()]{'title'} ?? '' !!}</a></p>
                @empty
                    <p>{{ __('No records') }}</p>
                @endforelse
            </div>
        </div>
    </div>

</div>
@endsection
