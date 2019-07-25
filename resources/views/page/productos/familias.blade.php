@extends('page.layouts.app')

@section('content')
{{--    @include('page.partials.carousel')--}}

    <div class="container my-5">
        <h2 class="ter-color">Seleccione una categoría</h2>
        <div class="row">
            @forelse($familias as $item)
            <div class="col-md-6 mt-5 text-center">
{{--                @dd($item)--}}
                <a href="{{ route('marcas',$item->id) }}" class="">
                    <img src="{{ asset($item->image[0]['image'] ?? 'uploads/no-img.png') }}" alt="" style="height: 200px;" class="">
                    <h4 class="text-center ter-color my-2">{!! $item->text[App::getLocale()]['title'] !!}</h4>
                </a>
            </div>
            @empty
            @endforelse
        </div>

    </div>

@endsection
