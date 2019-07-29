@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('producto.index') }}"><< Volver</a>
        <form class="row my-5" method="POST" action="{{ route('producto.store') }}" enctype="multipart/form-data">
            @csrf
            {{--@dd($general)--}}
            @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
                {{--@dd($contenido[$key])--}}
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" name="{{$key}}[title]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['title'] ?? '' }}">
                    </div>
                    <div class="md-form">
                        <input type="text" name="{{$key}}[subtitle]" placeholder="Subtitulo - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['title'] ?? '' }}">
                    </div>
                    <div class="md-form">
                        <p class="mb-0">Texto - {{ $lang['name'] }}</p>
                        <textarea class="md-textarea form-control ckeditor" name="{{$key}}[text]" rows="3">{!! $contenido[$key]['text'] ?? '' !!}</textarea>
                    </div>
                    <div class="md-form">
                        <input type="text" name="{{$key}}[title_car]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $producto->text[$key]['title_car'] ?? '' }}">
                    </div>
                    <div class="md-form">
                        <p class="mb-0">Caracteristicas - {{ $lang['name'] }}</p>
                        <textarea class="md-textarea form-control ckeditor" name="{{$key}}[caracteristica]" rows="3">{!! $producto->text[$key]['caracteristica'] ?? '' !!}</textarea>
                    </div>
                    <div class="md-form">
                        <input type="text" name="{{$key}}[relacionados]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $producto->text[$key]['relacionados'] ?? '' }}">
                    </div>
                </div>
            @endforeach
            <div class="col-md-12" style="margin-top: 1.5rem">
                <select-component :familias="{{ json_encode($familias) }}" :marcas="{{ json_encode($marcas) }}" :modelos="{{ json_encode($modelos) }}" :series="{{ json_encode($series) }}" :subfamilias="{{ json_encode($subfamilias) }}"></select-component>
                {{--<select name="family_id" id="" class="form-control">--}}
                    {{--<option value="" selected disabled>Seleccionar Familia</option>--}}
                    {{--@forelse($familias as $c)--}}
                        {{--<option value="{{ $c->id }}">{!! $c->text['es']['title'] ?? '' !!}</option>--}}
                    {{--@empty--}}
                        {{--<option value="" disabled >No hay categorias</option>--}}
                    {{--@endforelse--}}
                {{--</select>--}}
            </div>
            <related-component :related="{{ json_encode($productos) }}"></related-component>
            <div class="md-form col-md-6 mt-5">
                <input type="text" id="order" name="order" placeholder="Orden" class="form-control" >
            </div>
            <gallery-component :name="'file'"  title="Archivos"></gallery-component>
            <gallery-component :name="'imagenes'"  title="Planos"></gallery-component>
            <gallery-component :name="'gallery'"  title="Galeria de imagenes"></gallery-component>
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replaceClass = 'ckeditor';

        CKEDITOR.config.width = '100%';


    </script>
@stop
