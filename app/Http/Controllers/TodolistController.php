<?php

namespace App\Http\Controllers;
use App\Models\todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
   //
    function list()
    {
    $data=todolist::all();
    return view('proglist', ['todolist'=>$data]);
    }

    function delete($id)
    {
        $data=todolist::find($id);
        $data->delete();
        return redirect('list');
    }

    function Addtodolist(Request $req)
    {
        $data = new todolist;
        $data->tache=$req->tache;
        $data->save();
        return redirect('list');

    }

    function showdata($id)
    {

        $data=todolist::find($id);
        return view('modifier',['todolist'=>$data]);


    }


    function modifier(Request $req)
    {

        $data=todolist::find($req->id);
        $data->tache=$req->tache;
        $data->save();
        return redirect('proglist');

    }
}

