<?php

namespace App\Http\Controllers;

use App\Http\Requests\libaryRequest;
use App\Models\libary;
use Illuminate\Http\Request;

class libaryController extends Controller
{
    public function index(Request $request) {
        if ($request -> search) {
            $task = libary::where('books', 'LIKE', "%$request->search%")
            ->get();

            return $task;
        }
        $task = libary::paginate(3);
        return view('libarys.index', [
            'data' => $task
        ]);
        
    }
    public function show($id) {
        $task = libary::find($id);
        return $task;
    }

    public function create(){
        return view('libarys.create');
    }

    public function store(libaryRequest $request){
        libary::create([
            'buku' => $request->task,
            'user' => $request->user
        ]);
        // return 'Success';
        return redirect('/list');
    }

    public function edit($id){
        $task = libary::find($id);
        return view('libarys.edit', compact('libarys'));
    }
    
    public function update(libaryRequest $request, $id){
        $task = libary::find($id);
        $task->update([
            'buku' => $request->task,
            'user' => $request->user
        ]);
        return redirect('/list');
    }

    public function delete($id) {
        $task = libary::find($id)
        ->delete();
        return redirect('/list');
    }
}
