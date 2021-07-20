<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use App\Models\Grocery;

class GroceriesController extends Controller
{
    public function index(){

        $groceries = Grocery::all();
        return view('groceries/index', ['grocery' => $groceries]); 
    
    }

    public function create(){

        $groceries = Grocery::all();
        return view('groceries/create', ['grocery' => $groceries]); 

    }

    public function store(){

    }

    public function edit(Grocery $grocery){
         
        return view('groceries/edit', ['grocery' => $grocery]); 

    }

    public function update(){

    }


    public function destroy(){

    }
}