@extends('page.layouts.app')
@push('style')
    <style>
        #myClassicTab .nav-link{
            color: #000 !important;
        }
        #myClassicTab li .active{
            border-bottom: 2px solid #FFB900 !important;
        }
        #myClassicTab li a{
            border-bottom: 2px solid transparent;
        }
    </style>
@endpush
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-2" style="border-bottom: 2px solid #C11939; width: 100px">Buscador</h2>
            </div>
        </div>
        <form class="row justify-content-center my-4" action="{{ route('buscador') }}" method="get">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control my-2" placeholder="Buscar...">
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-md ter-fondo text-white px-5 m-0 my-2">Buscar</button>
            </div>
        </form>


        <div class="row my-5">
            @forelse($resultado as $item)
                {{--@dd($item->image[0]['image'])--}}
                <div class="col-md-4 col-sm-6  mb-5">
                    <a href="{{ route('producto',['producto' => $item->id]) }}" class=" " style="text-decoration: none; color: unset;">
                        <div class="card">
                            <div class="card-body text-center" style="height: 300px">
                                <div class="d-flex justify-content-center align-items-center" style="height: 300px">
                                    <img class="img-fluid" src="{{ asset($item->image[0]['image'] ?? '') }}" alt="Card image cap">
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-center align-items-center bg-white" style="height: 100px;">
                                <div class="text-center">
                                    <p class="m-0">{!! $item->subfamily->text{'title_'.App::getLocale()} ?? '' !!}</p>
                                    <h4 class="">
                                        {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col">
                    <h4>No se encontraron resultados</h4>
                </div>
            @endforelse
        </div>
    </div>
@endsection
