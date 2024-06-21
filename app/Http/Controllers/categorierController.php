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
        $category->categorier = strtolower($request->categorier);
        $category->save();
        return redirect('/')->with('success', 'Categoy created  successfully');
    }

    function update(CategorierRequest $request, categorier $categorier)
    {
        $categorier->categorier = strtolower($request->categorier);
        $categorier->save();
        return redirect('/')->with('success', 'Categoy updated successfully');
    }

    function delete(categorier $category)
    {
        $category->delete();
        return redirect('/')->with('success', 'Categoy deleted successfully');
    }
}
