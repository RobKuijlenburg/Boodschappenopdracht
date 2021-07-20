<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use App\Models\Grocery;

class GroceriesController extends Controller
{
    public function index(){
        //shows a list of the resources
        $groceries = Grocery::all();
        return view('groceries/index', ['grocery' => $groceries]); 
    
    }

    public function create(){
        //shows a view to create a new resource
        $groceries = Grocery::all();
        return view('groceries/create', ['grocery' => $groceries]); 

    }

    public function store(){
        // persists a new resource
    }

    public function edit(Grocery $grocery){
         // Show a view to edit an existing resource
        return view('groceries/edit', ['grocery' => $grocery]); 

    }

    public function update(){
        // Persist the edited resource
    }


    public function destroy(){
        // Delete the resource
    }
}