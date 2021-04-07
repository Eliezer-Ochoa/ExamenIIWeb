@extends('layouts.plantillabase')

@section('contenido')
<a href="libro/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th>ISBN</th>
            <th>Titulo</th>
            <th>Editorial</th>
            <th>Autor</th>
            <th>Edicion</th>
            <th>Fecha</th>
            <th>Operaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($libro as $libro)
            <tr>
                <td>{{ $libro->isbn }}</td>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->editorial }}</td>
                <td>{{ $libro->autor }}</td>
                <td>{{ $libro->edicion }}</td>
                <td>{{ $libro->fecha }}</td>
                <td>
                    <form action="{{ route('libro.destroy', $libro->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="/libro/{{ $libro->id }}/edit" class="btn btn-info">Editar</a>\
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection