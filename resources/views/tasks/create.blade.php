@extends('adminlte::page')

@section('title', 'Lista de Tarefas')

@section('content_header')
    <h1>Lista de Tarefas</h1>
@endsection

@section('content')
<h1>Criar Nova Tarefa</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" required>
        
        <label for="description">Descrição:</label>
        <textarea name="description" required></textarea>
        
        <label for="status">Status:</label>
        <select name="status">
            <option value="PENDENTE">Pendente</option>
            <option value="EM ANDAMENTO">Em Andamento</option>
            <option value="FINALIZADO">Finalizado</option>
        </select>

        <button type="submit">Criar</button>
    </form>
@endsection
