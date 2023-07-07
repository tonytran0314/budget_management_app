<?php

namespace App\Http\Controllers\API\V1\category;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CategoryCollection;
use App\Http\Resources\V1\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /********************************************* EDIT, DELETE IS FOR ADMIN ************************************* */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CategoryCollection(Category::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new CategoryResource(Category::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
