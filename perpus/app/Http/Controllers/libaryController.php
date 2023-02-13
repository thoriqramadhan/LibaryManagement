<?php

namespace App\Http\Controllers;

use App\Http\Requests\libaryRequest;
use App\Models\libary;
use Illuminate\Http\Request;

class libaryController extends Controller
{
    public function index(Request $request) {
        if ($request -> search) {
            $task = libary::where('nama buku', 'LIKE', "%$request->search%")
            ->get();

            return $task;
        }
        $task = libary::paginate(3);
        return view('libary.index', [
            'data' => $task
        ]);
        
    }
    public function show($id) {
        $task = libary::find($id);
        return $task;
    }

    public function create(){
        return view('task.create');
    }

    public function store(libaryRequest $request){
        libary::create([
            'task' => $request->task,
            'user' => $request->user
        ]);
        // return 'Success';
        return redirect('/tasks');
    }

    public function edit($id){
        $task = libary::find($id);
        return view('task.edit', compact('task'));
    }
    
    public function update(libaryRequest $request, $id){
        $task = libary::find($id);
        $task->update([
            'task' => $request->task,
            'user' => $request->user
        ]);
        return redirect('/tasks');
    }

    public function delete($id) {
        $task = libary::find($id)
        ->delete();
        return redirect('/tasks');
    }
}
