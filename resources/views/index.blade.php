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
                        <input type="checkbox" class="complete-checkbox" data-id="{{ $task->id }}" {{ $task->completed ? 'checked' : '' }}>
                        <p class="completed-p">Completed</p>
                        <p class="task-name">{{ $task->title }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
     @endif
</div>

