<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorierRequest;
use App\Models\categorier;
use Illuminate\Http\Request;

class categorierController extends Controller
{
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'categorier.0' => 'required|string|unique:categoriers,categorier'
        ]);

        $category = new categorier();
        $category->categorier = strtolower($formFields['categorier'][0]);
        $category->save();
        return redirect('/')->with('success', 'Categoy created  successfully');
    }

    function update(Request $request, Categorier $categorier)
{
    $newCategorier = strtolower($request->categorier);
    if ($newCategorier === $categorier->categorier) {
        return redirect('/');
    }
    $formFields = $request->validate([
        'categorier.1' => 'unique:categoriers,categorier|required|string'
    ]);
    $categorier->categorier = $newCategorier;
    $categorier->save();
    return redirect('/')->with('success', 'Category updated successfully');
}


    function delete(categorier $category)
    {
        $category->delete();
        return redirect('/')->with('success', 'Categoy deleted successfully');
    }
}
