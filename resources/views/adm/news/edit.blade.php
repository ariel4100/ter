@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('noticia.index') }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('noticia.update',$noticia->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
{{--                @dd($noticia)--}}
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" name="{{$key}}[title]" placeholder="Titulo - {{ $lang['name'] }}" class="form-control" value="{{ $noticia->text[$key]['title'] ?? '' }}">
                    </div>
                    <div class="md-form">
                        <p class="mb-0">Texto - {{ $lang['name'] }}</p>
                        <textarea class="md-textarea form-control ckeditor" name="{{$key}}[text]" rows="3">{!! $noticia->text[$key]['text'] ?? '' !!}</textarea>
                    </div>

                </div>
            @endforeach
            <div class="col-md-6 mb-5">
                <select name="category_id" id="" class="form-control">
                    <option value="" selected disabled>Seleccionar categoria</option>
                    @forelse($categories as $k=>$c)
                        <option value="{{ $c->id }}" {{ $noticia->category_id == $c->id ? 'selected': '' }}>{{ $c->text['es']['title'] }}</option>
                    @empty
                        <option value="" disabled >No hay categorias</option>
                    @endforelse
                </select>
            </div>
            <div class="col-md-6 mb-5">
                <div class="md-form m-0">
                    <input type="text" id="order" name="order" class="form-control" value="{!! $noticia->order !!}">
                    <label for="order" class="">Orden</label>
                </div>
            </div>

            <gallery-component :name="'gallery'" title="Galeria de imagenes" :galeria="{{ json_encode($noticia->image) }}"></gallery-component>
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script>
        CKEDITOR.replace('text_es');
        CKEDITOR.replace('text_en');

        CKEDITOR.config.width = '100%';
    </script>
@endpush
