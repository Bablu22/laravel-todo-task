<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Todo::class, 'todo');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Todo/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255'],
            'description' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->id(),
            'completed' => false,
        ]);

        session()->flash('success', 'Todo created successfully');
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return inertia('Todo/Show', [
            'todo' => $todo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return inertia('Todo/Edit', [
            'todo' => $todo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {

        $validator = Validator::make($request->all(), [
            'title' => ['required', 'max:255'],
            'description' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        session()->flash('success', 'Todo updated successfully');

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        session()->flash('success', 'Todo deleted successfully');

        return redirect()->route('dashboard');
    }
}
