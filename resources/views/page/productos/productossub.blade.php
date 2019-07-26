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
        <h2 class="ter-color">Marcas</h2>
        <div class="row">
            @include('page.partials.botonera2')
            <div class="col-md-9">
                <div class="row">
                    @forelse($productos as $item)
                        <div class="col-md-4">
                            <a href="{{ route('producto',$item->id) }}" class="nav-link text-uppercase">
                                <img src="{{ asset($item->image[0]['title'] ?? 'uploads/no-img.png') }}" alt="" style="height: 200px;" class="img-fluid w-100">
                                <p class=" ter-color my-2">{!! $item->text[App::getLocale()]['title'] !!}</p>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>

    </div>

@endsection
