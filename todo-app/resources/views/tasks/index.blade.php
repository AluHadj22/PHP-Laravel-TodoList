@extends('tasks/layouts.app')

@section('content')
<h1>Список задач</h1>

@foreach($tasks as $task)
   <div class="container">
      <div class="card" style="margin-bottom: 20px;">
         <div class="card-body">
            <p>
               @if($task->isCompleted())
               <span class="badge bg-success">выполнено!</span>
               @else 
               {{ $task->description}}
               @endif
            </p>
            <form action="/tasks/{{ $task->id }}" method="POST">
               @method('DELETE')
               @csrf
               @if(!$task->isCompleted())
               <button class="btn btn-danger btn-block" input="submit">Завершить и удалить задачу</button>
               @else
               <button class="btn btn-danger btn-block" input="submit">Удалить задачу</button>
               @endif
            </form>
         </div>
      </div>
   </div>
@endforeach

<a href="/tasks/create" class="btn btn-primary btn-lg">Новая задача</a>
@endsection