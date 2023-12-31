<?php

namespace App\Http\Controllers\API\V1\budget;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BudgetInputValidation;

use App\Models\Budget;

use App\Http\Resources\V1\BudgetResource;
use App\Http\Resources\V1\BudgetCollection;

class BudgetController extends Controller
{

    /********************************************* ONLY INDEX, STORE AND SHOW ************************************* */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new BudgetCollection(Budget::paginate());
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
    public function store(BudgetInputValidation $request)
    {
        $request->validated($request->all());
        return new BudgetResource(Budget::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new BudgetResource(Budget::find($id));
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
