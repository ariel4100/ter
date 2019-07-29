@extends('adm.layouts.app')

@section('content')
<div class="container p-4">
    <a class="text-decoration-none" href="{{ route('metadatos.index') }}"><< Volver</a>
    <form action="{{ route('metadatos.store') }}" class="mt-4" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="md-form">
                    <input type="text" id="Seccion" name="section" value="{{ $contenido->section ?? '' }}" class="form-control">
                    <label for="Seccion">Seccion</label>
                </div>
            </div>
            @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
                {{--@dd($contenido[$key])--}}
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" name="{{$key}}[keyword]" placeholder="Palabras claves (,) - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['keyword'] ?? '' }}">
                    </div>
                    <div class="md-form">
                        <p class="mb-0">Descripcion - {{ $lang['name'] }}</p>
                        <textarea class="md-textarea form-control ckeditor" name="{{$key}}[descripcion]" rows="3">{!! $contenido[$key]['descripcion'] ?? '' !!}</textarea>
                    </div>
                </div>
            @endforeach

            <div class="col-md-12 text-right my-4">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </form>
</div>
@endsection
