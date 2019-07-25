@if (session('status'))
    <div class="alert alert-success my-4" role="alert">
        {!! session('status') !!}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger  my-4" role="alert">
        <span class="card-title">Se encontraron los siguientes errores:</span>
        @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </div>
@endif