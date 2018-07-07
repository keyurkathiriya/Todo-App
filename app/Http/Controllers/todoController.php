<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class todoController extends Controller
{
    public function index(){
    	$task = Task::all();
    	return view('welcome')->with('fetch',$task);
    }
    public function add(){
    	return view('add');
    }

    public function insert(Request $req){

        $req->validate([
            'taskname' => 'required',
            'taskstatus' => 'required',
        ]);
    	$task = new Task;
    	$task->taskname=$req->taskname;
    	$task->taskstatus=$req->taskstatus;
    	$task->save();
    	return redirect("/");
    }

    public function edit(Request $req){
    	$taskedit = Task::where('id',$req->id)->first();
    	return view('edit')->with('editdata',$taskedit);
    }

    public function update(Request $req){
        $taskedit = Task::where('id',$req->id)->first();
        $taskedit->taskname=$req->taskname;
        $taskedit->taskstatus=$req->taskstatus;
        $taskedit->update();
        return redirect('/');
    }

    public function delete(Request $req){
        $taskdelete = Task::where('id',$req->id)->first();
        $taskdelete->delete();
        return redirect('/');
    }

}
