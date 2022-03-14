<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Animals;



class AnimalsController extends Controller
{
    public function create(){
        $create = Animals::all();
        return view('pages.animalNew', compact('create'));
    }

    public function store(Request $request){
        $store = new Animals();
        $store->type = $request->type;
        $store->name = $request->name;
        $store->age = $request->type;
        $store-> save();
        return redirect('/animals');
    }

    public function destroy($id){
        $delete = Animals::find($id);
        $delete->delete();
        return redirect('/');
    }

    public function edit($id){
        $edit = Animals::find($id);
        return view('edit', compact('edit'));
    }

    public function update($id, Request $request){
        $update = Animals::find($id);
        $update->type = $request->type;
        $update->name = $request->name;
        $update->age = $request->age;
        $update->save();
        return redirect('/animals');
    }
}
