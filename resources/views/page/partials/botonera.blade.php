
<div class="col-md-3" id="sidebar">
    <ul class="list-unstyled">

        @forelse($marcas as $key=>$item)
            {{--@dd($item)--}}
            <li class="list-group-item border-0 px-0">
                <a href="{{ route('modelos',$item->id) }}" data-target="#categoria_{{$key}}" data-toggle="collapse" aria-expanded="false" class="d-flex align-items-center p-2 border-bottom  ">
                    <span onclick="location.href='{{ route('modelos',$item->id) }}'">{!! $item->text[App::getLocale()]['title'] !!}</span><i class="fas fa-chevron-right ml-auto"></i>
                </a>
                <ul class="list-unstyled collapse  " id="categoria_{{$key}}">
                    @forelse($item->model as $key1=>$data)
{{--                        @dd($data->serie)--}}
                        <li class="list-group-item border-0 px-3">
                            <a href="{{ route('serie',$data->id) }}" data-target="#model_{{$key1}}" data-toggle="collapse" aria-expanded="false" class="d-flex align-items-center p-2 border-bottom  ">
                                <span onclick="location.href='{{ route('serie',$data->id) }}'">{!! $data->text[App::getLocale()]['title'] !!}</span><i class="fas fa-chevron-right ml-auto"></i>
                            </a>
                            <ul class="list-unstyled collapse  " id="model_{{$key1}}">
                                @forelse($data->serie as $data)
                                    {{--@dd($data->product)--}}
                                    {{--<li><a href="" class="px-3 py-2  @if(isset($producto)) {{$data->id == $producto->id ? 'ter-color': null }}@endif">{{ $data->text[App::getLocale()]['title']  }}</a></li>--}}
                                    <li class="list-group-item border-0 px-3">
                                        <a href="{{ route('productos',$data->id) }}" data-target="#serie_{{$key1}}" data-toggle="collapse" aria-expanded="false" class="d-flex align-items-center p-2 border-bottom  ">
                                            <span onclick="location.href='{{ route('productos',$data->id) }}'">{!! $data->text[App::getLocale()]['title'] !!}</span><i class="fas fa-chevron-right ml-auto"></i>
                                        </a>
                                        <ul class="list-unstyled collapse  " id="serie_{{$key1}}">
                                            @forelse($data->product as $data)
                                                <li><a href="{{ route('producto',$data->id) }}" class="px-3 py-2  @if(isset($producto)) {{$data->id == $producto->id ? 'ter-color': null }}@endif">{{ $data->text[App::getLocale()]['title']  }}</a></li>
                                            @empty
                                                <li><a href="" class="p-2">No hay registros</a></li>
                                            @endforelse
                                        </ul>
                                    </li>
                                @empty
                                    <li><a href="" class="p-2">No hay registros</a></li>
                                @endforelse
                            </ul>
                        </li>
                        {{--<li><a href="" class="px-3 py-2  @if(isset($producto)) {{$data->id == $producto->id ? 'ter-color': null }}@endif">{{ $data->text[App::getLocale()]['title']  }}</a></li>--}}
                    @empty
                        <li><a href="" class="p-2">No hay registros</a></li>
                    @endforelse
                </ul>
            </li>
        @empty
            <li><a href="" class="p-2">No hay registros</a></li>
        @endforelse
    </ul>
</div>