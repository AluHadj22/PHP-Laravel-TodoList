
@extends('tasks/layouts.app')
@section('content')
<div class="card" style="width: 18rem;">
  <img src="https://kredit-on.ru/wp-content/uploads/d/5/3/d534eccebd8fd4e54a9ce4899934bd81.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Внимание!!!</h5>
    <p class="card-text">Данное веб приложение позволяет вам создавать список задач, отслеживать их выполнение. Вы можете посмотреть "Список задач", чтобы увидеть ваши дела, или cоздать новые задачи.</p>
    <a href="/tasks/create" class="btn btn-primary">Создать новую задачу</a>
</div>
@endsection
