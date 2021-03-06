<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
    public function index()
    {
        // $tasks = DB::table('tasks')->orderBy('name')->get();

        $tasks = Task::all()->sortBy('name');
        return view('tasks.index', compact('tasks'));
    }
    public function show($id)
    {
        $task = DB::table('tasks')->find($id);

        return view('show', compact('task'));
    }
    public function store(Request $request)
    {
        // $task = DB::table('tasks')->insert([
        //     'name' => $request->name,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        $validated = $request->validate([
            'name' => 'required|max:15 | min:3|string'
        ]);
        $task = new Task();
        $task->name = $request->name;
        $task->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        // DB::table('tasks')->where('id', '=', $id)->delete();
        Task::find($id)->delete();
        return redirect('/');
    }
    public function edit($id)
    {
        //$tasks = DB::table('tasks')->orderBy('name')->get();
        //  $task = DB::table('tasks')->find($id);
        $task = Task::find($id);
        $tasks = Task::all()->sortBy('name');
        return view('tasks.edit', compact('task', 'tasks'));
    }

    public function update(Request $request, $id)
    {

        // $tasks = DB::table('tasks')->orderBy('name')->get();


        // $task = DB::table('tasks')
        //     ->where('id', '=', $id)
        //     ->update(['name' => $request->name]);
        $tasks = Task::all()->sortBy('name');
        $task = Task::find($id);
        $task->name = $request->name;
        $task->save();
        return redirect('/');
    }
}
