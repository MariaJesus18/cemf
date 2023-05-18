<?php

namespace App\Http\Controllers;

use App\Models\TypeRelease;
use Illuminate\Http\Request;

class TypeReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('typeRelease.index', [
            'typeRelease' => TypeRelease::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('typeRelease.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TypeRelease::create($request->all());

        return redirect(url('typeReleases'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeRelease  $typeRelease
     * @return \Illuminate\Http\Response
     */
    public function show(TypeRelease $typeRelease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeRelease  $typeRelease
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeRelease $typeRelease)
    {
        return view('typeRelease.edit', [
            'typeRelease' => TypeRelease::find($typeRelease->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeRelease  $typeRelease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeRelease $typeRelease)
    {
        $typeRelease = TypeRelease::find($typeRelease->id);

        $typeRelease->update($request->all());

        return redirect('/typeReleases');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeRelease  $typeRelease
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeRelease $typeRelease)
    {
        $typeRelease->delete();

        return redirect('/typeReleases');
    }
}
