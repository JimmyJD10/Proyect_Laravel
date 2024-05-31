@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Nota</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('notes.store') }}">
        @csrf
        <div class="form-group">
            <label for="course">Curso:</label>
            <select id="course" name="course" class="form-control">
                <option value="">Seleccione un curso</option>
                @foreach($courses as $course)
                    <option value="{{ $course }}" {{ old('course') == $course ? 'selected' : '' }}>{{ $course }}</option>
                @endforeach
            </select>
            @error('course')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="note">Nota:</label>
            <textarea id="note" name="note" class="form-control" rows="4">{{ old('note') }}</textarea>
            @error('note')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar Nota</button>
    </form>
</div>
@endsection
