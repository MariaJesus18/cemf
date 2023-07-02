<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeRelease;
use App\Http\Requests\requestTypeRelease;

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
    public function create()
    {
        return view('typeRelease.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(requestTypeRelease $request)
    {
        TypeRelease::create($request->all());

        return redirect(url('typeReleases'));

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
            'typeRelease' =>$typeRelease
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeRelease  $typeRelease
     * @return \Illuminate\Http\Response
     */
    public function update(requestTypeRelease $request, TypeRelease $typeRelease)
    {   
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
