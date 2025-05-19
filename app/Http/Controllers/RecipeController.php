<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     *  Display a list of Recipes
     */
    public function index()
    {
        return view('recipes.index', [
            'recipes' => Recipe::all()
        ]);
    }

    /**
     *  Show the form for creating a new Recipe
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     *  Store a new Recipe in the database
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'preparation_time' => 'required',

        ]);
        // Create a new Recipe model object
        $recipe = Recipe::create($validated);
        // Redirect to the recipes index page
        return redirect()->route('recipes.index');
    }

    /**
     *  Show the details of the specified Recipe
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', [
            'recipe' => $recipe
        ]);
    }

    /**
     *  Show the form for editing the specified Recipe
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', [
            'recipe' => $recipe
        ]);
    }

    /**
     *  Update the specified Recipe in the database
     */
    public function update(Request $request, Recipe $recipe)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'preparation_time' => 'required',
        ]);

        $recipe->update($validated);
        // Redirect to the recipes show page
        return redirect()->route('recipes.show', $recipe);
    }

    /**
     *  Display a confirmation screen for deleting the specified Recipe
     */
    public function delete(Recipe $recipe)
    {
        return view('recipes.delete', [
            'recipe' => $recipe
        ]);
    }

    /**
     *  Remove the specified Recipe from the database
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        // Redirect to the recipe index page
        return redirect()->route('recipes.index')
            ->with('success', 'Recipe successfully deleted');
    }
}
