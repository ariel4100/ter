
<div class="col-md-3" id="sidebar">
    <ul class="list-unstyled">

{{--            @dd($producto->family->product)--}}
            <li class="list-group-item border-0 px-0">
                <a href="{{ route('serie.sub',$producto->family->id) }}" data-target="#categoria_1" data-toggle="collapse" aria-expanded="false" class="d-flex align-items-center p-2 border-bottom  ">
                    <span onclick="location.href='{{ route('serie.sub',$producto->family->id) }}'">{!! $producto->family->text[App::getLocale()]['title'] !!}</span><i class="fas fa-chevron-right ml-auto"></i>
                </a>
                <ul class="list-unstyled collapse show" id="categoria_1">
                                @forelse($producto->family->product as $data)
                                    {{--@dd($data->product)--}}
                                    {{--<li><a href="" class="px-3 py-2  @if(isset($producto)) {{$data->id == $producto->id ? 'ter-color': null }}@endif">{{ $data->text[App::getLocale()]['title']  }}</a></li>--}}
                                    <li class=" ">
                                        <a href="{{ route('producto.sub',$data->id) }}" class="px-3 py-2">
                                            <span onclick="location.href='{{ route('producto.sub',$data->id) }}'">{!! $data->text[App::getLocale()]['title'] !!}</span>
                                        </a>
                                        {{--<ul class="list-unstyled collapse  " id="serie_{{$key1}}">--}}
                                            {{--@forelse($data->product as $data)--}}
                                                {{--<li><a href="{{ route('producto',$data->id) }}" class="px-3 py-2  @if(isset($producto)) {{$data->id == $producto->id ? 'ter-color': null }}@endif">{{ $data->text[App::getLocale()]['title']  }}</a></li>--}}
                                            {{--@empty--}}
                                                {{--<li><a href="" class="p-2">No hay registros</a></li>--}}
                                            {{--@endforelse--}}
                                        {{--</ul>--}}
                                    </li>
                                @empty
                                    <li><a href="" class="p-2">No hay registros</a></li>
                                @endforelse
                            </ul>

            </li>

    </ul>
</div>