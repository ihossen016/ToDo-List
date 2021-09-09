<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('completed')->get();
        return view('todo.index')->with(['todos' => $todos]);
    }
    public function create()
    {
        return view('todo.create');
    }
    public function upload(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $todo = $request->title;

        Todo::Create(['title' => $todo]);
        return redirect()
            ->back()
            ->with('success', 'ToDo created successfully!');
    }
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todo.edit')->with(['id' => $id, 'todo' => $todo]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $upadateTodo = Todo::find($request->id);
        $upadateTodo->update(['title' => $request->title]);
        return redirect('/index')->with(
            'success',
            'ToDo Updated Successfully!'
        );
    }
    public function completed($id)
    {
        $todo = Todo::find($id);

        if ($todo->completed) {
            $todo->update(['completed' => false]);
            return redirect()
                ->back()
                ->with('success', 'ToDo marked as Incomplete.');
        } else {
            $todo->update(['completed' => true]);
            return redirect()
                ->back()
                ->with('success', 'ToDo marked as Completed.');
        }
    }
    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()
            ->back()
            ->with('success', 'ToDo deleted Successfully.');
    }
}
