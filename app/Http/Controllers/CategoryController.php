<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all()
            ->sortDesc();
        // dd($categories);
        return view("category.index", ["categories"=> $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => ["required","string","max:15"],
        ]);

        $data['user_id'] = $request->user()->id;
        $category = category::create($data);

        return to_route("category.index")->with("message", "Category created successfully !!");
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        // dd($category);     
        return view("category.show", ['category'=> $category]);
    }   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        // dd($category->name);
        if($category->user_id != request()->user()->id){
            abort(403);
        } 
        return view("category.edit", ['category'=> $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $data = $request->validate([
            'name'=> ['required','string','max:15'],
        ]);

        $category->update($data);

        return to_route("category.index")->with("message", "Category updated successfully !!"); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        if($category->user_id != request()->user()->id){
            abort(403);
        } 
        $category->delete();
        return to_route("category.index")->with("message", "Category deleted successfully !!");
    }
}
