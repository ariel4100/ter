@extends('page.layouts.app')

@section('content')
{{--    @include('page.partials.carousel')--}}

    <div class="container my-5">
        @if(count($marcas))
        <h2 class="ter-color">Marcas</h2>
        @else
            {{--<h2 class="ter-color">Uso</h2>--}}
        @endif
        <div class="row">
            @forelse($marcas as $item)
            <div class="col-md-3 mt-5 text-center">
                {{--@dd($item->image[0]['image'])--}}
                <a href="{{ route('modelos',$item->id) }}" class="">
                    <div class="">
                        <img src="{{ asset($item->image[0]['image'] ?? 'uploads/no-img.png') }}" alt="" class="w-100">
                    </div>
                    <h4 class="text-center ter-color my-2">{!! $item->text[App::getLocale()]['title'] !!}</h4>
                </a>
            </div>
            @empty
            @endforelse
            @forelse($subfamilias as $item)
                <div class="col-md-3 mt-5 text-center">
                                        {{--@dd($item->image[0]['image'])--}}
                    <a href="{{ route('serie.sub',$item->id) }}" class="">
                        <div style="height: 200px;" class="overflow-hidden d-flex justify-content-center border">
                            <img src="{{ asset($item->image[0]['image'] ?? 'uploads/no-img.png')  }}" alt="" class="img-fluid">
                        </div>
                        <h4 class="text-center ter-color my-2">{!! $item->text[App::getLocale()]['title'] !!}</h4>
                    </a>
                </div>
            @empty
            @endforelse

                @forelse($productos as $item)
                    <div class="col-md-3 mt-5 text-center">
                        {{--@dd($item->image[0]['image'])--}}
                        <a href="{{ route('producto.sub',$item->id) }}" class="">
                            <div style="height: 200px;" class="overflow-hidden d-flex justify-content-center border">
                                <img src="{{ asset($item->image[0]['image'] ?? 'uploads/no-img.png')  }}" alt="" class="img-fluid">
                            </div>
                            <h4 class="text-center ter-color my-2">{!! $item->text[App::getLocale()]['title'] !!}</h4>
                        </a>
                    </div>
                @empty
                @endforelse
        </div>

    </div>

@endsection
