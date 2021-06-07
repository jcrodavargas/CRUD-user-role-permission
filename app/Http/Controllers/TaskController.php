<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{

    /**
     * Lógica tomada del repositorio de LaravelDaily
     * https://github.com/LaravelDaily/Laravel-Jetstream-CRUD-Roles
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Guarda en $tasks el todos'all()' los registros de del Model-BD Task.
        $tasks = Task::all();

        // Retorna mostrando la vista index y las tareas.
        return view('dashboard.tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retorna la vista de crear una tarea.
        return view('dashboard.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        // Llama al Model Task para que cree'create()' 
        // un nuevo registro con todo lo obtenido'$request' de los inputs
        // una vez que hayan sido validados'->validated()'
        Task::create($request->validated());

        // Retorna redireccionando a la ruta de index.
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        // Muestra la vista para ver un registro.
        // se indica como parámetro el ID de la tarea que se dese aver
        // Se retorna con los datos obtenidos.
        return view('dashboard.tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('dashboard.tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {

        // Se elimina la tarea
        $task->delete();

        // Retorna redireccionando a la ruta index.
        return redirect()->route('task.index');
    }
}
