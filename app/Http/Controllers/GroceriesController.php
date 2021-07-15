<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use App\Models\Grocery;

class GroceriesController extends Controller
{
    public function index(){
    
        foreach (Grocery::all() as $grocery){
           echo "<p>{$grocery->name}</p>";
           echo "<p>{$grocery->number}</p>";
        }
      

    }

    public function create(){

    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }


    public function destroy(){

    }
}