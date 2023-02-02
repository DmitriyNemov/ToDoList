<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index()
    {
        $todolists = ToDoList::all();
        return view('home', compact('todolists'));
    }

    public function store(Request $request)
    {
        $data= $request ->validate([
            'content' => 'required'
        ]);
        ToDoList::create($data);
        return back();
    }

    public function destroy(ToDoList $todolist)
    {
        $todolist->delete();
        return back();
    }

}
