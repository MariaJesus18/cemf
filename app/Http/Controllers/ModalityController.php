<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modality;
use App\Http\Requests\requestModalitys;

class ModalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modalitys.index', ['modalitys' => Modality::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modalitys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(requestModalitys $request)
    {
        Modality::create($request->all());
        return redirect(url('modalitys'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modality  $modality
     * @return \Illuminate\Http\Response
     */
    public function show(Modality $modality)
    {
        return view('modalitys.show', ['modality' => $modality]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modality  $modality
     * @return \Illuminate\Http\Response
     */
    public function update(requestModalitys $request, Modality $modality)
    {
        $modality->update($request->all());
        return redirect(url('modalitys'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modality  $modality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modality $modality)
    {
        $modality->delete();
        return redirect(url('modalitys'));
    }
}
