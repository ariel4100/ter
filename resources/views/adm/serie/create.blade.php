@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('serie.index') }}"><< Volver</a>
        <form class="row my-5" method="POST" action="{{ route('serie.store') }}" enctype="multipart/form-data">
            @csrf
            {{--@dd($general)--}}
            @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
                {{--@dd($contenido[$key])--}}
                <div class="col-md-6">
                    <div class="md-form">
                    <input type="text" name="{{$key}}[title]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['title'] ?? '' }}">
                    </div>
                    {{--<div class="md-form">--}}
                        {{--<p class="mb-0">Texto - {{ $lang['name'] }}</p>--}}
                        {{--<textarea class="md-textarea form-control ckeditor" name="{{$key}}[text]" rows="3">{!! $contenido[$key]['text'] ?? '' !!}</textarea>--}}
                    {{--</div>--}}
                </div>
            @endforeach
            <div class="col-md-12" style="margin-top: 1.5rem">
                <select-serie :familias="{{ json_encode($familias) }}"></select-serie>
                {{--<select-component :familias="{{ json_encode($familias) }}" ></select-component>--}}
                {{--<select name="family_id" id="" class="form-control">--}}
                    {{--<option value="" selected disabled>Seleccionar Familia</option>--}}
                    {{--@forelse($familias as $c)--}}
                        {{--<option value="{{ $c->id }}">{!! $c->text['es']['title'] ?? '' !!}</option>--}}
                    {{--@empty--}}
                        {{--<option value="" disabled >No hay categorias</option>--}}
                    {{--@endforelse--}}
                {{--</select>--}}
            </div>
            <div class="md-form col-md-6 mt-5">
                <input type="text" id="order" name="order" placeholder="Orden" class="form-control" >
            </div>
            <gallery-component :name="'gallery'"  title="Galeria de imagenes"></gallery-component>
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('Texto');

        CKEDITOR.config.width = '100%';


    </script>
@stop
