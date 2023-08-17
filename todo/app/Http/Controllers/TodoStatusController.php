<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoStatusController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Todo::class, 'todo');
    }

    public function statusChange(Todo $todo)
    {
        $todo->update([
            'completed' => !$todo->completed,
        ]);
        return redirect()->back();
    }
}
