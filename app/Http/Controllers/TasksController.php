<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tasks;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //add-001
        $tasks = tasks::all();
        return view('tasks.index', [
           'tasks' => $tasks,
       ]);
       
       // return view('tasks.index')->with('tasks,$tasks');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add-10281610
        $tasks = new tasks;
        
        return view('tasks/create',
        ['tasks' => $tasks,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //add-10282151
        $this->validate($request,[
            'status' => 'required|max:10',
            'content' => 'required|max:255',
            ]);
        
        //add-10281610
        
        $tasks = new Tasks();
        $tasks ->status =$request->status;
        $tasks->content = $request->content;
        $tasks->save();
        
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //add-002
        $tasks = tasks::find($id);
        
        return view('tasks.show',[
            'tasks'=>$tasks,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //編集ページ
        $tasks = tasks::find($id);
        
        return view('tasks.edit',[
            'tasks' => $tasks,
            ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //add-10282158
        $this->validate($request,[
            'status' => 'required|max:10',
            'content' => 'required | max:255',
        ]);
            
        
        //add-10281654
        $tasks = tasks::find($id);
        $tasks ->status = $request->status;
        $tasks->content = $request->content;
        $tasks->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //add-003
        $tasks = tasks::find($id);
        $tasks->delete();

        return redirect('/');
    }
}
