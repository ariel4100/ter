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
            @include('page.partials.botonera')
            <div class="col-md-9">
                <div class="row">
                    @forelse($productos as $item)
                        <div class="col-md-4">
                            <a href="{{ route('producto',$item->id) }}" class="nav-link text-uppercase">
                                <div style="height: 200px;" class="overflow-hidden d-flex justify-content-center">
                                    <img src="{{ asset($item->image[0]['title'] ?? 'uploads/no-img.png') }}" class="h-100" alt="">
                                </div>
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
