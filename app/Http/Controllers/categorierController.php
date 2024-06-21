<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorierRequest;
use App\Models\categorier;
use Illuminate\Http\Request;

class categorierController extends Controller
{
    public function store(CategorierRequest $request)
    { 
        $category = new categorier();
        $category->categorier = $request->new_cat; 
        $category->save();
        return redirect('/')->with('success', 'Categoy created  successfully');
    }

    function update(CategorierRequest $request, categorier $category)
    {
        $category->categorier = $request->new_cat; 
        $category->save();
        return redirect('/')->with('success', 'Categoy updated successfully');
    }

    function delete(categorier $category)
    {
        $category->delete();
        return redirect('/')->with('success', 'Categoy deleted successfully');
    }
}
