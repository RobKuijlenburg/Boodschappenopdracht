<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use App\Models\Grocery;

class GroceriesController extends Controller
{
    public function index(){
        //shows a list of the resources
        $groceries = Grocery::all();
        return view('groceries/index', ['groceries' => $groceries]); 
    
    }

    public function create(){
        //shows a view to create a new resource
     
        return view('groceries/create'); 

    }

    public function store(){
        // persists a new resource

        request()->validate([
            'name' => 'required',
            'number' => 'required',
            'price' => 'required'
        ]);

        $grocery = new Grocery();
        $grocery->name = request('name');
        $grocery->number = request('number');
        $grocery->price = request('price');

        $grocery->save();

        return redirect('/groceries');
    }

    public function edit(Grocery $grocery){
         // Show a view to edit an existing resource
        return view('groceries/edit', ['grocery' => $grocery]); 

    }

    public function update(Grocery $grocery){
        // Persist the edited resource

        request()->validate([
            'name' => 'required',
            'number' => 'required',
            'price' => 'required'
        ]);


        $grocery->name = request('name');
        $grocery->number = request('number');
        $grocery->price = request('price');

        $grocery->save();

        return redirect('/groceries');
    }
    


    public function destroy(Grocery $grocery){
        $grocery->delete();
        // Delete the resource
        $groceries = Grocery::all();
        return view('groceries/index', ['groceries' => $groceries]); 
        // redirect('/groceries');
    }
}