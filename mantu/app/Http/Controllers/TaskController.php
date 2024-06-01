<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //mendapatkan dan menampilkan data tugas
    public function index(){
    //mendapatkan data
    $tasks = Task::getAll();
    //mengirimkan data tugas ke view
    return view('task.index', [
        'tasks'=> $tasks
    ]);
}

}
