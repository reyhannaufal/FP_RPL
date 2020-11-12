<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function all()
    {
        return Recipe::all();
    }

    public function show($id)
    {
        return Recipe::find($id);
    }

    public function store(Request $request)
    {
        return Recipe::create($request->all());
    }

    public function update($id, Request $request)
    {
        $recipe = Recipe::find($id);
        $recipe->update($request->all());
        return $recipe;
    }

    public function delete($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return 204;
    }
}
