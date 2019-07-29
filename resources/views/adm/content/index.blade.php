@extends('adm.layouts.app')

@section('content')
    <div class="container my-5">
        <form class="row" method="POST" action="{{ route('contenido.update',$section) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="section" value="{{$section}}">
{{--            <input type="hidden" name="type" value="{{$type}}">--}}
            @if($section == 'home')
                {{--@dd($contenido)--}}
{{--                <div class="custom-file">--}}
{{--                    <input name="image" value="" class="form-control  custom-file-input" type="file" placeholder="Imagen">--}}
{{--                    <label class="custom-file-label mb-0 text-truncate" data-browse="Buscar" for="ficha"></label>--}}
{{--                </div>--}}
                @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
{{--                    @dd($contenido->text[$key]['title'])--}}
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" name="{{$key}}[title]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['title'] }}">
                        </div>
                        <div class="md-form">
                            <input type="text" name="{{$key}}[servicio]" placeholder="Titulo servicios - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['servicio'] }}">
                        </div>
                        <div class="md-form">
                            <input type="text" name="{{$key}}[marcas]" placeholder="Titulo marcas - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['marcas'] }}">
                        </div>
{{--                        <div class="md-form">--}}
{{--                            <p class="mb-0">Texto Es</p>--}}
{{--                            <textarea class="md-textarea form-control" name="text_ es" rows="3"> {{ $lang['name'] }}</textarea>--}}
{{--                        </div>--}}
                    </div>
                @endforeach
                <gallery-component :name="'imagenes'" :title="'Imagenes'" :label="'Imagen'" :galeria="{{ json_encode($imagenes['imagenes']) }}"></gallery-component>

                <gallery-component :name="'servicios'" :title="'Servicios'" :label="'Imagen'" :galeria="{{ json_encode($imagenes['servicios']) }}"></gallery-component>

                <gallery-component :name="'marcas'" :title="'Marcas'" :label="'Imagen'" :galeria="{{ json_encode($imagenes['marcas']) }}"></gallery-component>

                {{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto En</p>--}}
{{--                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! $contenido->text{'text_en'} !!}</textarea>--}}
{{--                </div>--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! $contenido->text{'title_es'} !!}">--}}
{{--                </div>--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!! $contenido->text{'title_en'} !!}">--}}
{{--                </div>--}}


            @endif
            @if($section == 'nosotros')
                @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
                    {{--@dd($contenido[$key])--}}
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" name="{{$key}}[title]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['title'] ?? '' }}">
                        </div>
                        <div class="md-form">
                            <p class="mb-0">Texto </p>
                            <textarea class="md-textarea form-control ckeditor" name="{{$key}}[text]" rows="3">{!! $contenido[$key]['text'] !!}</textarea>
                        </div>
                    </div>
                @endforeach
                    <gallery-component :name="'imagenes'" :title="'Imagenes'" :label="'Imagen'" :galeria="{{ json_encode($imagenes['imagenes']) }}"></gallery-component>
                    <video-component  :galeria="{{ json_encode($imagenes['video']) }}"></video-component>

            @endif
            @if($section == 'calidad')
{{--                @dd(LaravelLocalization::getSupportedLocales())--}}
                @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
{{--                    @dd($contenido[$key])--}}
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" name="{{$key}}[subtitle]" placeholder="Subtitulo - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['subtitle'] ?? '' }}">
                        </div>
                        <div class="md-form">
                            <input type="text" name="{{$key}}[title]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['title'] ?? '' }}">
                        </div>
                        <div class="md-form">
                            <p class="mb-0">Texto - {{ $lang['name'] }}</p>
                            <textarea class="md-textarea form-control ckeditor" name="{{$key}}[text_calidad]" rows="3">{!! $contenido[$key]['text_calidad'] !!}</textarea>
                        </div>
                        <div class="md-form">
                            <input type="text" name="{{$key}}[title_laboratorio]" placeholder="Titulo laboratorio - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['title_laboratorio'] ?? '' }}">
                        </div>
                        <div class="md-form">
                            <p class="mb-0">Texto - {{ $lang['name'] }}</p>
                            <textarea class="md-textarea form-control ckeditor" name="{{$key}}[text_laboratorio]" rows="3">{!! $contenido[$key]['text_laboratorio'] !!}</textarea>
                        </div>
                        <div class="md-form">
                            <input type="text" name="{{$key}}[title_maquina]" placeholder="Titulo maquina - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['title_maquina'] ?? '' }}">
                        </div>
                        <div class="md-form">
                            <p class="mb-0">Texto - {{ $lang['name'] }}</p>
                            <textarea class="md-textarea form-control ckeditor" name="{{$key}}[text_maquina]" rows="3">{!! $contenido[$key]['text_maquina'] !!}</textarea>
                        </div>
                    </div>
                @endforeach
{{--            @dd($imagenes['imagenes'])--}}
                <gallery-component :name="'imagenes'" :title="'Imagenes'" :label="'Imagen'" :galeria="{{ json_encode($imagenes['imagenes'] ?? []) }}"></gallery-component>

                <gallery-component :name="'maquinas'" :title="'Galeria de Maquina'" :label="'Imagen'" :galeria="{{ json_encode($imagenes['maquinas'] ?? []) }}"></gallery-component>

                <gallery-component :name="'laboratorios'" :title="'Galeria de Laboratorio'" :label="'Imagen'" :galeria="{{ json_encode($imagenes['laboratorios'] ?? []) }}"></gallery-component>

                <gallery-component :name="'archivos'" :title="'Archivos PDF'" :label="'Archivos'" :galeria="{{ json_encode($imagenes['archivos'] ?? []) }}" ></gallery-component>
            @endif
{{--            @if($section == 'nosotros')--}}
{{--                <div class="custom-file">--}}
{{--                    <input value=""  accept="image/jpeg,image/png,application/pdf" name="image" id="ficha" class="form-control  custom-file-input invalid" type="file" placeholder="Imagen">--}}
{{--                    <label data-invalid="Seleccione ficha" data-valid="Ficha seleccionada" class="custom-file-label mb-0 text-truncate" data-browse="Buscar" for="ficha"></label>--}}
{{--                </div>--}}
{{--                <!-----------NOSOTROS-------------->--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! $contenido->text{'title_es'} !!}">--}}
{{--                </div>--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!! $contenido->text{'title_en'} !!}">--}}
{{--                </div>--}}

{{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto Es</p>--}}
{{--                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} !!}</textarea>--}}
{{--                </div>--}}

{{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto En</p>--}}
{{--                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! $contenido->text{'text_en'} !!}</textarea>--}}
{{--                </div>--}}
{{--                <!-----------MISION-------------->--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="mision_es" name="mision_es" placeholder="Titulo Mision - español" class="form-control" value="{!! $contenido->text{'mision_es'} !!}">--}}
{{--                </div>--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="mision_en" name="mision_en" placeholder="Titulo Mision - ingles" class="form-control" value="{!! $contenido->text{'mision_en'} !!}">--}}
{{--                </div>--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto Es</p>--}}
{{--                    <textarea id="text_es" class="md-textarea form-control" name="misiontext_es" rows="3">{!! $contenido->text{'misiontext_es'} !!}</textarea>--}}
{{--                </div>--}}

{{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto En</p>--}}
{{--                    <textarea id="text_en" class="md-textarea form-control" name="misiontext_en" rows="3">{!! $contenido->text{'misiontext_en'} !!}</textarea>--}}
{{--                </div>--}}

{{--                <!-----------MISION-------------->--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="valores_es" name="valores_es" placeholder="Titulo Valores - español" class="form-control" value="{!! $contenido->text{'valores_es'} !!}">--}}
{{--                </div>--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="valores_en" name="valores_en" placeholder="Titulo Valores - ingles" class="form-control" value="{!! $contenido->text{'valores_en'} !!}">--}}
{{--                </div>--}}

{{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto Es</p>--}}
{{--                    <textarea id="valorestext_es" class="md-textarea form-control" name="valorestext_es" rows="3">{!! $contenido->text{'valorestext_es'} !!}</textarea>--}}
{{--                </div>--}}

{{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto En</p>--}}
{{--                    <textarea id="valorestext_en" class="md-textarea form-control" name="valorestext_en" rows="3">{!! $contenido->text{'valorestext_en'} !!}</textarea>--}}
{{--                </div>--}}
{{--               --}}
{{--            @endif--}}
{{--            @if($section == 'venta')--}}
{{--                <!-----------VENTA-------------->--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control" value="{!! $contenido->text{'title_es'} !!}">--}}
{{--                </div>--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!! $contenido->text{'title_en'} !!}">--}}
{{--                </div>--}}

{{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto Es</p>--}}
{{--                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} !!}</textarea>--}}
{{--                </div>--}}

{{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto En</p>--}}
{{--                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! $contenido->text{'text_en'} !!}</textarea>--}}
{{--                </div>--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto Es</p>--}}
{{--                    <textarea id="valorestext_es" class="md-textarea form-control" name="subtext_es" rows="3">{!! $contenido->text{'subtext_es'} !!}</textarea>--}}
{{--                </div>--}}

{{--                <div class="md-form col-md-6">--}}
{{--                    <p class="mb-0">Texto En</p>--}}
{{--                    <textarea id="valorestext_en" class="md-textarea form-control" name="subtext_en" rows="3">{!! $contenido->text{'subtext_en'} !!}</textarea>--}}
{{--                </div>--}}
{{--                    <div class="col-md-6 my-4">--}}
{{--                        <!-- Default unchecked -->--}}
{{--                        <div class="custom-control custom-checkbox">--}}
{{--                            <input type="checkbox" class="custom-control-input" name="featured" {{ isset($contenido->text{'featured'}) ? 'checked' : '' }} id="defaultUnchecked">--}}
{{--                            <label class="custom-control-label" for="defaultUnchecked">Destacado?</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                <gallery-component :galeria="{{ json_encode($contenido->image) }}"></gallery-component>--}}
{{--            @endif--}}
            @if($section == 'logos')
                <gallery-component :name="'imagenes'" :title="'Imagenes'" :label="'Imagen'" :galeria="{{ json_encode($imagenes['imagenes']) }}"></gallery-component>
            @endif
            @if($section == 'contacto')
                @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
                    {{--@dd($contenido[$key])--}}
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" name="{{$key}}[title]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $contenido[$key]['title'] ?? '' }}">
                        </div>
                        <div class="md-form">
                            <p class="mb-0">Texto - {{ $lang['name'] }}</p>
                            <textarea class="md-textarea form-control ckeditor" name="{{$key}}[text]" rows="3">{!! $contenido[$key]['text'] ?? '' !!}</textarea>
                        </div>
                        <div class="md-form">
                            <input type="text" id="Dirección" name="{{$key}}[direccion]" placeholder="Dirección - {{ $lang['name'] }}" class="form-control" value="{!! $contenido[$key]['direccion'] ?? '' !!}">
                        </div>
                        <div class="md-form">
                            <input type="text" id="Correo" name="{{$key}}[correo]" placeholder="Correo - {{ $lang['name'] }}" class="form-control" value="{!! $contenido[$key]['correo'] ?? '' !!}">
                        </div>
                    </div>
                @endforeach
            {{--@dd($contenido)--}}
                <div class="col-md-12">
                    <div class="row">
                        <div class="md-form col-md-6">
                            <input type="text" id="Telefono_2" name="es[telefono_1]" placeholder="Telefono 1" class="form-control" value="{!! $contenido['es']['telefono_1'] ?? '' !!}">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" id="Telefono_2" name="es[telefono_2]" placeholder="Telefono 2" class="form-control" value="{!! $contenido['es']['telefono_2'] ?? '' !!}">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" id="Telefono_2" name="es[telefono_3]" placeholder="Telefono 3" class="form-control" value="{!! $contenido['es']['telefono_3'] ?? '' !!}">
                        </div>
                        <div class="md-form col-md-6">
                            <input type="text" id="Telefono_2" name="es[telefono_4]" placeholder="Telefono 4" class="form-control" value="{!! $contenido['es']['telefono_4'] ?? '' !!}">
                        </div>
                    </div>
                </div>
            @endif
            @if($section == 'redes')
                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="Titulo" name="es[facebook]" placeholder="URL Facebook" class="form-control" value="{!! $contenido['es']['facebook']  ?? '' !!}">
                    </div>
                    <div class="md-form">
                        <input type="text" id="Titulo" name="es[youtube]" placeholder="URL Youtube" class="form-control" value="{!! $contenido['es']['youtube'] ?? '' !!}">
                    </div>
                </div>
            @endif
{{--            @if($section == 'condiciones')--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="Titulo" name="title_es" placeholder="Titulo - español" class="form-control" value="{!!  $contenido->text{'title_es'} ?? '' !!}">--}}
{{--                </div>--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <input type="text" id="Titulo" name="title_en" placeholder="Titulo - ingles" class="form-control" value="{!!  $contenido->text{'title_en'} ?? '' !!}">--}}
{{--                </div>--}}
{{--                <div class="md-form col-md-6">--}}
{{--                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $contenido->text{'text_es'} ?? '' !!}</textarea>--}}
{{--                </div>--}}

{{--                <div class="md-form col-md-6">--}}
{{--                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! $contenido->text{'text_en'} ?? '' !!}</textarea>--}}
{{--                </div>--}}


{{--            @endif--}}
 
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script>

        CKEDITOR.replaceClass = 'ckeditor';

        CKEDITOR.config.width = '100%';
    </script>
@endpush
