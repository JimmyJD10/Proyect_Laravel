@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Mis Notas</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($notes->isEmpty())
        <p>No hay notas disponibles.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Nota</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $note)
                    <tr>
                        <td>{{ $note->course }}</td>
                        <td>{{ $note->note }}</td>
                        <td>
                            <!-- Aquí puedes agregar botones para editar y eliminar notas -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
