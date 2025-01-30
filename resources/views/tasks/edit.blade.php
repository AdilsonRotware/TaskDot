@extends('layouts.app')

@section('content')
    <h1>Editar Tarefa</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Título:</label>
        <input type="text" name="title" value="{{ $task->title }}" required>
        
        <label for="description">Descrição:</label>
        <textarea name="description" required>{{ $task->description }}</textarea>
        
        <label for="status">Status:</label>
        <select name="status">
            <option value="PENDENTE" {{ $task->status == 'PENDENTE' ? 'selected' : '' }}>Pendente</option>
            <option value="EM ANDAMENTO" {{ $task->status == 'EM ANDAMENTO' ? 'selected' : '' }}>Em Andamento</option>
            <option value="FINALIZADO" {{ $task->status == 'FINALIZADO' ? 'selected' : '' }}>Finalizado</option>
        </select>

        <button type="submit">Salvar alterações</button>
    </form>
@endsection
