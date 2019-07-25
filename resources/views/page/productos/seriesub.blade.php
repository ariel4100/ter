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
            {{--@include('page.partials.botonera')--}}
            <div class="col-md-9">
                <div class="row">
                    @forelse($series as $item)
                        <div class="col-md-4">
                            <a href="{{ route('productos.sub',$item->id) }}" class="nav-link text-uppercase">
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
