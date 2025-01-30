@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p><strong>Descrição:</strong> {{ $task->description }}</p>
    <p><strong>Status:</strong> {{ $task->status }}</p>

    <a href="{{ route('tasks.index') }}">Voltar</a>
@endsection
