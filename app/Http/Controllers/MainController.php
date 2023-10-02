<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\TasksModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = TasksModel::orderBy("created_at", "DESC")->paginate(8);
        
        return view('index', [
            "tasks" => $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4|max:20',
        ]);
    
        TasksModel::create($request->all());
    
        return redirect()->route('home')->with('success', 'Задача успешно создана.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = TasksModel::findOrFail($id);
        $category = CategoryModel::where('id', $task->category_id)->first();

        return view('show', [
            "task" => $task,
            "categoryTitle" => $category->title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = TasksModel::find($id);
        return view('edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:4|max:20',
        ]);
    
        $task = TasksModel::findOrFail($id);
        $task->update($request->all());
    
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = TasksModel::findOrFail($id);
        $task->delete();

        return redirect()->route('home');
    }
}
