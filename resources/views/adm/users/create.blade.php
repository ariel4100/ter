@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('usuario.index') }}"><< Volver</a>
        <form class="" method="POST" action="{{ route('usuario.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Nombre</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="username" name="username" class="form-control" required>
                        <label for="username" class="">Nombre de Usuario</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="email" id="email" name="email" class="form-control" required>
                        <label for="email" class="">Email</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="password" id="password" name="password" class="form-control" required>
                        <label for="password" class="">Contraseña</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 my-4 text-right">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    {{--<script>--}}
        {{--CKEDITOR.replace('Texto');--}}

        {{--CKEDITOR.config.width = '100%';--}}
    {{--</script>--}}
@stop
