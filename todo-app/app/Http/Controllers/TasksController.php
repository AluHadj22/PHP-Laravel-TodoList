<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; // Добавляю импорт класса Task

class TasksController extends Controller
{
    public function info(){
        return view('tasks.info');
    }

    public function index(){
        $tasks = Task::orderBy('completed_at')
            ->orderBy('id', 'DESC')
            ->get();
        return view('tasks.index', [
            'tasks'=>$tasks,
        ]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        $request->validate([
            'description' => 'required', // Указываю, что поле 'description' обязательно
        ]);
    
        $task = Task::create([
            'description' => $request->input('description'),
        ]);
    
        return redirect('/tasks/index');
    }

    public function update($id){
        $task = Task::findOrFail($id);
        $task->completed_at = now();
        $task->save();

        return redirect('/tasks/index'); 
    }
    
    public function delete($id) {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/tasks/index');
    }
}