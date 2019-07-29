@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a href="{{ route('metadatos.create') }}" class="btn btn-primary rounded-pill"><i class="fas fa-plus-circle mx-1"></i>Añadir</a>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Seccion</th>
                        {{--<th scope="col">Keyword</th>--}}
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($metadatos as $item)
                        <tr>
                            <td>{{ $item->section }}</td>
                            {{--<td>{{ $item->text[es][] }}</td>--}}
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('metadatos.edit',$item->id) }}"><i class="fas fa-pen"></i></a>
                                {{--<a class="btn btn-sm btn-danger" href=" "><i class="fas fa-trash-alt"></i></a>--}}
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
