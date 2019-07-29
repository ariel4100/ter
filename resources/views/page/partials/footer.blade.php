{{--<!-- Footer -->--}}
{{--<footer class="page-footer" style="background-color: #444444">--}}
    {{--<div class="container text-md-left py-5">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-12 col-md-3 d-flex justify-content-start align-items-center">--}}

                {{--<img src="{{ asset($logos->text{'footer'}) }}" alt="" class="img-fluid">--}}
                {{--<!--<div class="d-flex my-5">--}}
                    {{--<p style="font-size: 13px">SEGUINOS EN</p>--}}
                    {{--<a href="" class="tpn-blue mx-2"><i class="fab fa-facebook fa-lg"></i></a>--}}
                    {{--<a href="" class="tpn-blue"><i class="fab fa-youtube fa-lg"></i></a>--}}
                {{--</div>-->--}}
            {{--</div>--}}
            {{--<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 mx-auto mb-4">--}}
                {{--<h6 class="text-uppercase baires-color">{{ __('Sections') }}</h6>--}}
                {{--<div class="d-flex justify-content-between "  >--}}
                    {{--<div class="">--}}
                        {{--<a href="{{ route('home') }}" class="nav-link m-0 p-0">{{ __('Home') }}</a>--}}
                        {{--<a href="{{ route('nosotros') }}" class="nav-link m-0 p-0">{{ __('About us') }}</a>--}}
                        {{--<a href="{{ route('productos',['general' => 1]) }}" class="nav-link m-0 p-0">{{ __('Packaging') }}</a>--}}
                        {{--<a href="{{ route('productos',['general' => 2]) }}" class="nav-link m-0 p-0">{{ __('Dosing') }}</a>--}}
                        {{--<a href="{{ route('productos',['general' => 3]) }}" class="nav-link m-0 p-0">{{ __('Accessory') }}</a>--}}
                    {{--</div>--}}
                    {{--<div class="">--}}
                        {{--<a href="{{ route('noticias') }}" class="nav-link m-0 p-0">{{ __('News') }}</a>--}}
                        {{--<a href="{{ route('post.venta') }}" class="nav-link m-0 p-0">{{ __('Post-Sale') }}</a>--}}
                        {{--<a href="{{ route('videos') }}" class="nav-link m-0 p-0">{{ __('Videos') }}</a>--}}
                        {{--<a href="{{ route('contacto') }}" class="nav-link m-0 p-0">{{ __('Contact') }}</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-sm-12 col-md-2">--}}
                {{--<h6 class="text-uppercase baires-color">{{ __('Packaging') }}</h6>--}}
                {{--<a href="" class="nav-link m-0 p-0">Verticales</a>--}}
                {{--<a href="" class="nav-link m-0 p-0">Flow Pack</a>--}}
                {{--<a href="" class="nav-link m-0 p-0">Doy Pack</a>--}}
                {{--<a href="" class="nav-link m-0 p-0">Termocontraibles</a>--}}
                {{--<a href="{{ route('productos',['general' => 2]) }}" class="nav-link m-0 p-0">{{ __('Dosing') }}</a>--}}
            {{--</div>--}}


            {{--<div class="col-sm-12 col-md-4">--}}
                {{--<h6 class="text-uppercase baires-color">BAIRES PACK</h6>--}}
                {{--<ul class="list-group" style="font-size: 13px">--}}
                    {{--<li class="list-group-item border-0 d-flex align-items-center px-0 py-1" style="background-color: unset">--}}
                        {{--<i class="material-icons baires-color mr-3">location_on</i>--}}
                        {{--<a href="https://goo.gl/maps/NHZ9knxQyEwdwrPD7" target="_blank">{!! $contacto->text{'direccion'} ?? '' !!}</a>--}}
                    {{--</li>--}}
                    {{--<li class="list-group-item border-0 d-flex align-items-center px-0 py-1" style="background-color: unset">--}}
                        {{--<i class="material-icons baires-color mr-3">phone_in_talk</i>--}}
                        {{--<div class="">--}}
                            {{--<a href="tel:{!! $contacto->text{'telefono_1'} ?? '' !!}">{!! $contacto->text{'telefono_1'} !!}</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="list-group-item border-0 d-flex align-items-center px-0 py-1" style="background-color: unset">--}}
                        {{--<i class="material-icons baires-color mr-3">mail_outline</i>--}}
                        {{--<div class="">--}}
                            {{--<a href="mailto:{!! $contacto->text{'correo'} ?? '' !!}">{!! $contacto->text{'correo'} ?? '' !!}</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}

                {{--</ul>--}}
            {{--</div>--}}
            {{--<!-- Grid column -->--}}

        {{--</div>--}}
        {{--<!-- Grid row -->--}}

    {{--</div>--}}
    {{--<!-- Footer Links -->--}}

    {{--<!-- Copyright -->--}}
    {{--<div class=" ">--}}
        {{--<div class="container py-1 d-flex justify-content-between" style="border-top: 1px solid #888888; ">--}}
            {{--<p>© 2019</p>--}}
            {{--<a class="text-lighten-4" href="#!">BY OSOLE</a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Copyright -->--}}

{{--</footer>--}}
{{--<!-- Footer -->--}}
<!-- Footer -->
<footer class="page-footer font-small pt-4" style="background-color: #222222; border-top: 3px solid #D33538">
    <div class="container text-center text-md-left">

        <div class="row">

            <div class="col-md-4 mt-md-0">
                <img src="{{ asset($logos[2]['image']) }}" alt="" class="img-fluid">
            </div>

            <div class="col-md-3 mb-md-0">
                <p class="text-uppercase font-weight-bold">SECCIONES</p>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ url('/') }} " class="text-uppercase">INICIO</a>
                    </li>
                    <li>
                        <a href="{{ route('nosotros') }} " class="text-uppercase">NOSOTROS</a>
                    </li>
                    <li>
                        <a href="{{ route('familias') }} " class="text-uppercase">PRODUCTOS</a>
                    </li>
                    <li>
                        <a href="{{ route('noticias') }} " class="text-uppercase">NOVEDADES</a>
                    </li>
                    <li>
                        <a href="{{ route('calidad') }} " class="text-uppercase">CALIDAD</a>
                    </li>
                    <li>
                        <a href="{{ route('contacto') }} " class="text-uppercase">CONTACTO</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-2 mb-md-0">
                <p class="text-uppercase font-weight-bold">SEGUINOS EN</p>
                <a href="" class="pl-2"><i class="fab fa-facebook-square fa-2x" style="color: #CCCCCC"></i></a>
                <a href="" class="px-3"><i class="fab fa-youtube fa-2x" style="color: #CCCCCC"></i></a>
            </div>

            <div class="col-md-3 mb-md-0">
                <p class="text-uppercase font-weight-bold">TER APLICACIONES ESPECIALES</p>
                <ul class="list-group" style="font-size: 13px">
                    <li class="list-group-item border-0 d-flex align-items-center px-0 py-1" style="background-color: unset">
                        <i class="material-icons mr-3" style="color: #D33538">location_on</i>
                        <a href="https://goo.gl/maps/NHZ9knxQyEwdwrPD7" target="_blank">{!! $contacto->text[App::getLocale()]{'direccion'} ?? '' !!}</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 py-1" style="background-color: unset">
                        <i class="material-icons  mr-3" style="color: #D33538">phone_in_talk</i>
                        <div class="d-flex flex-column">
                            <a href="tel:{!! $contacto->text['es']{'telefono_1'} ?? '' !!}">{!! $contacto->text['es']{'telefono_1'} ?? '' !!}</a>
                            <a href="tel:{!! $contacto->text['es']{'telefono_2'} ?? '' !!}">{!! $contacto->text['es']{'telefono_2'} ?? '' !!}</a>
                            <a href="tel:{!! $contacto->text['es']{'telefono_3'} ?? '' !!}">{!! $contacto->text['es']{'telefono_3'} ?? '' !!}</a>
                            <a href="tel:{!! $contacto->text['es']{'telefono_4'} ?? '' !!}">{!! $contacto->text['es']{'telefono_4'} ?? '' !!}</a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 py-1" style="background-color: unset">
                        <i class="material-icons  mr-3" style="color: #D33538">mail_outline</i>
                        <div class="">
                            <a href="mailto:{!! $contacto->text{'correo'} ?? '' !!}">{!! $contacto->text[App::getLocale()]{'correo'} ?? '' !!}</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="container text-center py-3 d-flex justify-content-between border-top">
        <p class="m-0">© 2019</p>
        <a href="https://mdbootstrap.com/education/bootstrap/"> BY OSOLE</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->