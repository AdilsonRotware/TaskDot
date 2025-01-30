@extends('adminlte::page')

@section('title', 'Lista de Tarefas')

@section('content_header')
    <h1>Lista de Tarefas</h1>
@endsection

@section('content')
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Criar Nova Tarefa</a>

    <ul class="list-group mt-3">
        @foreach ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>{{ $task->title }}</strong> - {{ $task->status }}
                <div>
                    <a href="{{ route('tasks.show', $task) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
