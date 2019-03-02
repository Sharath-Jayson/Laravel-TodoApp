<?php

namespace App\Http\Controllers;

Use Session;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $todos =Todo::all();

        return view('todos', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $todo =new Todo;

        $todo->todo = $request->todo;

        $todo->save();

        Session::flash('success', 'Your TODO task was created!');

        return back();


    }

    public function delete($id)
    {
        //
       $todo = Todo::find($id);

       $todo->delete();

       Session::flash('success', 'YOur Task has been deleted.');

       return back();
    }

    public function edit($id)
    {
        //
       $todo = Todo::find($id);

       return view('edit', compact('todo'));
    }

    public function save(Request $request, $id)
    {

        $todo = Todo::find($id);
 
        $todo->todo = $request->todo;
        $todo->save();
        Session::flash('success', 'YOur Task has been Updated.');
        return redirect()->route('todos');

    }

    public function completed($id)
    {
        $todo = Todo::find($id);
        
        $todo->completed = 1;
        
        $todo->save();
        Session::flash('success', 'YOur Task has been marked as completed.');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
