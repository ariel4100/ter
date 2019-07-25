@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('slider.list', ['seccion' => $section]) }}"><< Volver</a>
        <section class=" ">
            <form class="row" method="POST" action="{{ route('slider.update',$slider->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="section" value="{{$section}}">
                @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
                    {{--@dd($contenido[$key])--}}
                    <div class="col-md-6">
                        {{--<div class="md-form">--}}
                        {{--<input type="text" name="{{$key}}[title]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['title'] ?? '' }}">--}}
                        {{--</div>--}}
                        <div class="md-form">
                            <p class="mb-0">Texto - {{ $lang['name'] }}</p>
                            <textarea class="md-textarea form-control ckeditor" name="{{$key}}[text]" rows="3">{!! $slider->text[$key]['text'] ?? '' !!}</textarea>
                        </div>

                    </div>
                @endforeach
                <div class="col-md-6 mb-5">
                    <div class="md-form m-0">
                        <input type="text" id="order" name="order" class="form-control" value="{!! $slider->order !!}">
                        <label for="order" class="">Orden</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <img src="{{ asset($slider->image) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-12 my-4 text-right">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </section>
    </div>
@endsection
@push('script')
    <script>
        CKEDITOR.replaceClass = 'ckeditor';
        CKEDITOR.config.width = '100%';
    </script>
@endpush