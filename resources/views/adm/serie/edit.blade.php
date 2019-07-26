@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('serie.index') }}"><< Volver</a>
        <form class="row my-5" method="POST" action="{{ route('serie.update',$serie->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
                {{--@dd($contenido[$key])--}}
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" name="{{$key}}[title]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $serie->text[$key]['title'] ?? '' }}">
                    </div>
                    {{--<div class="md-form">--}}
                    {{--<p class="mb-0">Texto - {{ $lang['name'] }}</p>--}}
                    {{--<textarea class="md-textarea form-control ckeditor" name="{{$key}}[text]" rows="3">{!! $contenido[$key]['text'] ?? '' !!}</textarea>--}}
                    {{--</div>--}}
                </div>
            @endforeach
            <div class="col-md-12" style="margin-top: 1.5rem">
                <selected-serie-component :familias="{{ json_encode($familias) }}" :serie="{{ json_encode($serie) }}"></selected-serie-component>
                {{--<select-component :familias="{{ json_encode($familias) }}" :marcas="{{ json_encode($marcas) }}" :producto="{{ json_encode($serie) }}"></select-component>--}}
            </div>
            <div class="md-form col-md-6">
                <input type="text" id="order" name="order" placeholder="Orden" class="form-control" value="{!! $serie->order !!}">
            </div>
            <gallery-component :name="'gallery'"  title="Galeria de imagenes" :galeria="{{ json_encode($serie->image) }}"></gallery-component>
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('subtitle');

        CKEDITOR.config.width = '100%';
    </script>
@stop

