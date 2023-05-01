<?php

namespace App\Http\Controllers;

use App\Models\LaunchCategory;
use Illuminate\Http\Request;

class LaunchCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('launchcategory.index', ['launchCategories' => LaunchCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('launchcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LaunchCategory::create($request->all());
        return redirect(url('lcategories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaunchCategory  $launchCategory
     * @return \Illuminate\Http\Response
     */
    public function show(LaunchCategory $lcategory)
    {
        return view('launchcategory.show', ['launchCategory' => $lcategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaunchCategory  $launchCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(LaunchCategory $launchCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaunchCategory  $launchCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaunchCategory $lcategory)
    {
        $lcategory->update($request->all());
        return redirect(url('lcategories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaunchCategory  $launchCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaunchCategory $launchCategory)
    {
        $launchCategory->delete();
        return redirect(url('lcategories'));
    }
}
