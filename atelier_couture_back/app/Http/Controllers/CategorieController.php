<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesStoreRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Categorie::paginate(2);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesStoreRequest $request)
    {
        return Categorie::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Categorie::find($id);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = $this->show($id);
        if ($category) {
            $category->delete();
        }
    }
}
