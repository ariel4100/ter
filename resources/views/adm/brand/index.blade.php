@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a href="{{ route('marca.create') }}" class="btn btn-primary rounded-pill"><i class="fas fa-plus-circle mx-1"></i>Añadir</a>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Familia</th>
                        <th scope="col">Orden</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse ($marcas as $item)
                        <tr>
                          <td><img src="{{ asset($item->image[0]{'image'} ?? 'uploads/no-img.png') }}" style="width: 100px"></td>
                            <td>{{ $item->text['es']{'title'} ?? '' }}</td>
                            <td>{{ $item->family->text['es']{'title'} ?? 'ninguno' }}</td>
                            <td>{{ $item->order }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('marca.edit',$item->id) }}"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" onclick="return confirm('¿Realmente desea eliminar este registro?')" href="{{ route('marca.delete',$item->id) }}"><i class="fas fa-trash-alt"></i></a>
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
