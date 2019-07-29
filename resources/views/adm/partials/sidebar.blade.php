
<nav id="sidebar" class="position-fixed h-100" style=" overflow-y:auto;">
    <ul class="list-unstyled">
        <div class="text-center">
            <img src="{{ asset($logos[1]['image'] ?? '') }}" alt="" class="img-fluid p-4">
        </div>
        <!---HOME---->
        <li class="">
            <a href="#Home" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">home</i>Inicio<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Home">
                <li><a href="{{ route('contenido.index', ['section' => 'home']) }}"><i class="fas fa-chevron-right px-4"></i>Informacion</a></li>
                {{--<li><a href="{{ route('contenido.index', ['section' => 'home', 'type' => 'imagen']) }}"><i class="fas fa-chevron-right px-4"></i>Contenido</a></li>--}}
                <li><a href="{{ route('slider.list', ['seccion' => 'home']) }}"><i class="fas fa-chevron-right px-4"></i>Slider</a></li>
            </ul>
        </li>
        <!---NOSOTROS---->
        <li class="">
            <a href="#Nosotros" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">business</i>Nosotros<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Nosotros">
                <li><a href="{{ route('contenido.index', ['section' => 'nosotros']) }}"><i class="fas fa-chevron-right px-4"></i>Informacion</a></li>

                <li><a href="{{ route('slider.list', ['seccion' => 'nosotros']) }}"><i class="fas fa-chevron-right px-4"></i>Slider</a></li>
            </ul>
        </li>
{{--        @php($general = \App\General::orderBy('order')->get())--}}

{{--        @foreach($general as $k=>$item)--}}

{{--            <li class="">--}}
{{--                <a href="#{{ $item->text{'title_es'} }}" data-toggle="collapse" aria-expanded="false" class="d-flex">--}}
{{--                    <i class="material-icons">shopping_basket</i>{{ $item->text{'title_es'} }}<i class="fas fa-sort-down ml-auto"></i>--}}
{{--                </a>--}}
{{--                <ul class="collapse list-group list-group-flush " id="{{ $item->text{'title_es'} }}">--}}
{{--                    @if($item->id != 3 )--}}
{{--                    <li><a href="{{ route('familia.index',['general' => $item]) }}"><i class="fas fa-chevron-right px-4"></i>Categorias</a></li>--}}
{{--                    <li><a href="{{ route('subfamilia.index',['general' => $item]) }}"><i class="fas fa-chevron-right px-4"></i>Subcategorias</a></li>--}}
{{--                    @endif--}}
{{--                    <li><a href="{{ route('productos.index',['general' => $item]) }}"><i class="fas fa-chevron-right px-4"></i>Productos</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        @endforeach--}}
        {{--<!---ENVASADORAS---->--}}
        {{--<li class="">--}}
            {{--<a href="#envasadoras" data-toggle="collapse" aria-expanded="false" class="d-flex">--}}
                {{--<i class="material-icons">contact_mail</i>Envasadoras<i class="fas fa-sort-down ml-auto"></i>--}}
            {{--</a>--}}
            {{--<ul class="collapse list-group list-group-flush " id="envasadoras">--}}
                {{--<li><a href="{{ route('familia.index') }}"><i class="fas fa-chevron-right px-4"></i>Categorias</a></li>--}}
                {{--<li><a href="{{ route('familia.index') }}"><i class="fas fa-chevron-right px-4"></i>Productos</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<!---DOSIFICADORAS---->--}}
        {{--<li class="">--}}
            {{--<a href="#dosificadoras" data-toggle="collapse" aria-expanded="false" class="d-flex">--}}
                {{--<i class="material-icons">contact_mail</i>Dosificadoras<i class="fas fa-sort-down ml-auto"></i>--}}
            {{--</a>--}}
            {{--<ul class="collapse list-group list-group-flush " id="dosificadoras">--}}
                {{--<li><a href="{{ route('familia.index') }}"><i class="fas fa-chevron-right px-4"></i>Categorias</a></li>--}}
                {{--<li><a href=" "><i class="fas fa-chevron-right px-4"></i>Subcategorias</a></li>--}}
                {{--<li><a href=" "><i class="fas fa-chevron-right px-4"></i>Productos</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<!---ACCESORIOS---->--}}
        {{--<li class="">--}}
            {{--<a href="#accesorios" data-toggle="collapse" aria-expanded="false" class="d-flex">--}}
                {{--<i class="material-icons">contact_mail</i>Accesorios<i class="fas fa-sort-down ml-auto"></i>--}}
            {{--</a>--}}
            {{--<ul class="collapse list-group list-group-flush " id="accesorios">--}}
                {{--<li><a href="{{ route('familia.index') }}"><i class="fas fa-chevron-right px-4"></i>Categorias</a></li>--}}
                {{--<li><a href=" "><i class="fas fa-chevron-right px-4"></i>Productos</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
    <!---NOVEDADES---->
        <li class="">
            <a href="#Productos" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">contact_mail</i>Productos<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Productos">
                <li><a href="{{ route('familia.index') }}"><i class="fas fa-chevron-right px-4"></i>Familia</a></li>
                <li><a href="{{ route('subfamilia.index') }}"><i class="fas fa-chevron-right px-4"></i>Subfamilia</a></li>
                <li><a href="{{ route('marca.index') }}"><i class="fas fa-chevron-right px-4"></i>Marcas</a></li>
                <li><a href="{{ route('modelo.index') }}"><i class="fas fa-chevron-right px-4"></i>Modelos</a></li>
                <li><a href="{{ route('serie.index') }}"><i class="fas fa-chevron-right px-4"></i>Serie</a></li>
                <li><a href="{{ route('producto.index') }}"><i class="fas fa-chevron-right px-4"></i>Productos</a></li>
            </ul>
        </li>
    <!---NOVEDADES---->
        <li class="">
            <a href="#Noticias" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">question_answer</i>Novedades<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Noticias">
                <li><a href="{{ route('categoria.index') }}"><i class="fas fa-chevron-right px-4"></i>Categoria</a></li>
                <li><a href="{{ route('noticia.index') }}"><i class="fas fa-chevron-right px-4"></i>Listado de novedades</a></li>
            </ul>
        </li>
        <!---CALIDAD---->
        <li class="">
            <a href="#Venta" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">verified_user</i>Calidad<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Venta">
                <li><a href="{{ route('contenido.index', ['section' => 'calidad']) }}"><i class="fas fa-chevron-right px-4"></i>Informacion</a></li>
                {{--<li><a href="{{ route('contenido.index', ['section' => 'venta', 'type' => 'imagen']) }}"><i class="fas fa-chevron-right px-4"></i>Contenido</a></li>--}}
            </ul>
        </li>

        <!---CONTACTO---->
        <li class="">
            <a href="#Contacto" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">contact_mail</i>Contacto<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Contacto">
                <li><a href="{{ route('contenido.index', ['section' => 'contacto']) }}"><i class="fas fa-chevron-right px-4"></i>Informacion</a></li>
            </ul>
        </li>
        <hr>
        <!---DISTREN---->
        <li class="">
            <a href="#Logos" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">settings</i>TER<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Logos">
                <li><a href="{{ route('contenido.index', ['seccion' => 'logos']) }}"><i class="fas fa-chevron-right px-4"></i>Logos</a></li>
                <li><a href="{{ route('contenido.index', ['seccion' => 'redes']) }}"><i class="fas fa-chevron-right px-4"></i>Redes Sociales</a></li>
                <li><a href="{{ route('contenido.index', ['seccion' => 'condiciones']) }}"><i class="fas fa-chevron-right px-4"></i>Terminos y Condiciones</a></li>
                <li><a href="{{ route('metadatos.index') }}"><i class="fas fa-chevron-right px-4"></i>Metadatos</a></li>
                <li><a href="{{ route('usuario.index') }}"><i class="fas fa-chevron-right px-4"></i>Usuarios</a></li>
            </ul>
        </li>

        <!---LOGOS
        <li class="">
            <a href="#Logos" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">wallpaper</i>Logos<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Logos">
                <li><a href="{{ route('contenido.index', ['seccion' => 'logos', 'tipo' => 'texto']) }}"><i class="fas fa-chevron-right px-4"></i>Editar Logos</a></li>
            </ul>
        </li>---->
        <!---REDES SOCIALES
        <li class="">
            <a href="#Redes" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">thumb_up</i>Redes Sociales<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Redes">
                <li><a href=" "><i class="fas fa-chevron-right px-4"></i>Editar Redes Sociales</a></li>
            </ul>
        </li>
        <!---METADATOS
        <li class="">
            <a href="#Metadatos" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">data_usage</i>Metadatos<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Metadatos">
                <li><a href="{{ route('metadatos.index') }}"><i class="fas fa-chevron-right px-4"></i>Editar Metadatos</a></li>
            </ul>
        </li>---->
        <!---USUARIOS
        <li class="">
            <a href="#Usuario" data-toggle="collapse" aria-expanded="false" class="d-flex">
                <i class="material-icons">account_circle</i>Usuario<i class="fas fa-sort-down ml-auto"></i>
            </a>
            <ul class="collapse list-group list-group-flush " id="Usuario">
                <li><a href=" "><i class="fas fa-chevron-right px-4"></i>Editar Usuario</a></li>
            </ul>
        </li>---->
    </ul>
</nav>


