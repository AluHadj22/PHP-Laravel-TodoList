
@extends('/tasks/layouts.app')
@section('content')
<h1>Новая задача</h1>
<form method="POST" action="/tasks">
    <div class="form-group">
        @csrf
        <label for="description">Описание задачи</label>
        <input class="form-control" name="description"/>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Создать задачу</button>
        </div>
    </form>
@endsection


    
