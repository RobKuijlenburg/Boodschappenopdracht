<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use App\Models\Grocery;

class GroceriesController extends Controller
{
    public function index(){
        
        return view('groceries/index', ['groceries' => Grocery::all()]); 
    
    }

    public function create(){
     
        return view('groceries/create'); 

    }

    public function store(){
 
        Grocery::create(request()->validate([
            'name' => 'required|min:2',
            'number' => 'required|integer|gt:0',
            'price' => 'required|numeric|gt:0'
        ]));

        return view('groceries/index', ['groceries' => Grocery::all()]);
    }

    public function edit(Grocery $grocery){
        
        return view('groceries/edit', ['grocery' => $grocery]); 

    }

    public function update(Grocery $grocery){

        $grocery->update(request()->validate([
            'name' => 'required|min:2',
            'number' => 'required|integer|gt:0',
            'price' => 'required|numeric|gt:0'
        ]));

        return view('groceries/index', ['groceries' => Grocery::all()]);
        
    }
    


    public function destroy(Grocery $grocery){

        $grocery->delete();
        $groceries = Grocery::all();
        return view('groceries.index', ['groceries' => $groceries]); 

    }
}