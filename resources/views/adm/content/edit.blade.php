@extends('adm.layouts.app')


@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('contenido.index', ['seccion' => $section,'tipo'=>$contenido->type]) }}"><< Volver</a>
        <section class=" ">
            <form class="row" method="POST" action="{{ route('contenido.update',$contenido->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="section" value="{{$section}}">
                <input type="hidden" name="type" value="{{$contenido->type}}">

                @if($section == 'home')
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" id="order" name="order" class="form-control" value="{!! isset($contenido) ? $contenido->order : null !!}">
                            <label for="order" class="">Orden</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="md-form">
                            <p>Texto</p>
                            <textarea id="text" class="md-textarea form-control" name="text" rows="3">{!! isset($contenido) ? $contenido->text : null !!}</textarea>
                        </div>
                    </div>
                @endif
                @if($contenido->type == 'imagen')
                    <div class="col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                            <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                        </div>
                    </div>
                    <div class="col-md-12 text-center my-5">
                        <img src="{{ asset($contenido->image) }}" alt="" class="img-fluid">
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" name="ficha" lang="es">
                            <label class="custom-file-label" for="customFileLang">Archivo Adjunto</label>
                        </div>
                    </div>
                @endif
                <div class="col-md-12 my-4 text-right">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </section>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('text');

        CKEDITOR.config.width = '100%';
    </script>
@stop
