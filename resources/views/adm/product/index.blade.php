@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a href="{{ route('producto.create') }}" class="btn btn-primary rounded-pill"><i class="fas fa-plus-circle mx-1"></i>Añadir</a>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Familia</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Subfamilia</th>
                        {{--<th scope="col">Modelo</th>--}}
                        {{--<th scope="col">Serie</th>--}}
                        <th scope="col">Orden</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse ($productos as $item)
                        <tr>
{{--                            @dd($item->brand())--}}
                            {{--<td><img src="{{  asset(isset($item->plans) ? $item->plans[0]{'image'} : 'uploads/no-img.png') }}" style="width: 100px"></td>--}}
                            <td>{{ $item->text['es']{'title'} ?? '' }}</td>
                            <td>{{ $item->family->text['es']{'title'} ?? 'ninguno' }}</td>
                            <td>{{ $item->brand->text['es']{'title'} ?? 'ninguno' }}</td>
                            <td>{{ $item->subfamily->text['es']{'title'} ?? 'ninguno' }}</td>
                            {{--<td>{{ $item->model->text['es']{'title'} ?? 'ninguno' }}</td>--}}
                            {{--<td>{{ $item->serie->text['es']{'title'} ?? 'ninguno' }}</td>--}}
                            <td>{{ $item->order }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('producto.edit',$item->id) }}"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" onclick="return confirm('¿Realmente desea eliminar este registro?')" href="{{ route('producto.delete',$item->id) }}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No hay registros</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
