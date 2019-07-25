@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <gallery-component></gallery-component>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('text');

        CKEDITOR.config.width = '100%';
    </script>
@stop
