@extends('page.layouts.app')
@push('style')
    <style>
        .list-group-item {

            background-color: #F2F2F2;
        }
        a:hover{
            text-decoration: none;
        }
    </style>
@endpush
@section('content')
    {{--@include('page.partials.carousel')--}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3288.1743922954292!2d-58.53220028519895!3d-34.49846285944266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb05fb79752c5%3A0xd8cf29d520973666!2sTER+SRL+-+Tomas+de+Fuerza+%2FBombas+Hidr%C3%A1ulicas+%2FCajas+de+Transferencia!5e0!3m2!1ses!2sar!4v1562871892355!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="container my-5">
        {{--@include('page.partials.message')--}}
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success my-4" role="alert">
                    {!! session('status') !!}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger  my-4" role="alert">
                    {{--<span class="card-title">Se encontraron los siguientes errores:</span>--}}
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-4 py-4 " style="background-color: #F2F2F2">
                @if(isset($contacto))
                    <h3 class="ter-color font-weight-bold" style="color: #939393">Contacto</h3>
                 {!! $contacto->text[App::getLocale()]{'text'} ?? '' !!}
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex align-items-center">
                            <i class="material-icons ter-color mr-3">location_on</i>
                            <div class="">
                                <p class="m-0 text-uppercase font-weight-bold">{{ __('Direccion') }}</p>
                                <a href="https://goo.gl/maps/NHZ9knxQyEwdwrPD7" target="_blank" class="text-muted">{!! $contacto->text[App::getLocale()]{'direccion'} ?? '' !!}</a>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center">
                            <i class="material-icons ter-color mr-3">phone_in_talk</i>
                            <div class="d-flex flex-column">
                                <p class="m-0 text-uppercase font-weight-bold">{{ __('Telefono') }}</p>
                                <a href="tel:{!! $contacto->text['es']{'telefono_1'} ?? '' !!}">{!! $contacto->text['es']{'telefono_1'} ?? '' !!}</a>
                                <a href="tel:{!! $contacto->text['es']{'telefono_2'} ?? '' !!}">{!! $contacto->text['es']{'telefono_2'} ?? '' !!}</a>
                                <a href="tel:{!! $contacto->text['es']{'telefono_3'} ?? '' !!}">{!! $contacto->text['es']{'telefono_3'} ?? '' !!}</a>
                                <a href="tel:{!! $contacto->text['es']{'telefono_4'} ?? '' !!}">{!! $contacto->text['es']{'telefono_4'} ?? '' !!}</a>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center">
                            <i class="material-icons ter-color mr-3">mail_outline</i>
                            <div class="">
                                <p class="m-0 text-uppercase font-weight-bold">{{ __('Correo') }}</p>
                                <a href="mailto:{!! $contacto->text{'correo'} ?? '' !!}" class="text-muted">{!! $contacto->text[App::getLocale()]{'correo'} ?? '' !!}</a>
                            </div>
                        </li>
                    </ul>
                @endif
            </div>
            <div class="col-md-8">
                {{--<hr class="baires-fondo" style="width: 20%">--}}
                <form class="form-row" action="{{ route('contacto.mail') }}" method="post">
                    @csrf
                    <div class="md-form my-2 col-md-6">
                        <input type="text" class="form-control" required placeholder="Nombre" name="nombre">
                    </div>
                    <div class="md-form my-2 col-md-6">
                        <input type="text" class="form-control" required placeholder="Email" name="email">
                    </div>
                    <div class="md-form my-2 col-md-6">
                        <input type="email" class="form-control" required placeholder="Teléfono" name="telefono">
                    </div>
                    <div class="md-form my-2 col-md-6">
                        <input type="text" class="form-control" required placeholder="Empresa" name="empresa">
                    </div>
                    <div class="md-form my-2 col-md-12">
                        <textarea id="form7" class="md-textarea form-control" placeholder="Mensaje" name="mensaje" rows="3"></textarea>
                    </div>
                    <div class="col-md-12 ">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="terminos" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">{{ __('Acepto los términos y condiciones') }}</label>
                        </div>
                    </div>
                    <div class="col-md-12  ">
                        <button type="submit" class="btn text-white px-5 my-4 ter-fondo rounded-pill">{{ __('Enviar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
