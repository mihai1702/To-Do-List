@extends('layout')

@section('title', 'Tasks')
@section('heading', 'Tasks list')

@section('content')
<div class="todolist">
    <!-- Task add form -->
     <div class="add-form">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Add a task" value="{{ old('title') }}">
            <button>Add Task</button>
        </form>
     </div>

     @if ($tasks->isEmpty())
        <p>There are no tasks listed</p>
     @else
        <ul>
            @foreach($tasks as $task)
                <li>
                    <div class="task-comp">
                        <form action="{{ route('tasks.update', $task) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm {{ $task->completed ? 'btn-success' : 'btn-outline-secondary' }}" type="submit" data-task-id="{{ $task->id }}"></button>
                            {{ $task->completed ? 'Finished' : '' }}
                        </form>

                        <span class="ms-2" style="{{ $task->completed ? 'text-decoration:line-through;color:#6c757d' : '' }}">
                            {{ $task->title }}
                        </span>
                    </div>
                </li>
            @endforeach
        </ul>
     @endif
</div>
