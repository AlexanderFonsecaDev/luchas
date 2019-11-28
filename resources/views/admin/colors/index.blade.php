@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        Lista de Colores
                        <a href="{{ route('colors.create') }}" class="float-right btn btn-sm btn-primary">
                            Crear
                        </a>
                    </div>

                    <div class="card-body">

                        @if(count($colors) <= 0)
                            <h2>Aun no registra ningún color </h2>
                        @else
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($colors as $color)
                                    <tr>
                                        <td>{{ $color->id }}</td>
                                        <td>{{ $color->name }}</td>
                                        <td width="10px">
                                            <a href="{{ route('colors.show', $color->id) }}"
                                               class="btn btn-sm btn-default">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('colors.edit', $color->id) }}"
                                               class="btn btn-sm btn-default">Editar</a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['colors.destroy', $color->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                @endif

                                </tbody>
                            </table>

                            {{ $colors->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
