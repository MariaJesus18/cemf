<?php

namespace App\Http\Controllers;

use App\Models\Launch;
use App\Models\LaunchAttachments;
use Illuminate\Http\Request;

class LaunchAttachmentsController extends Controller
{
    public function index()
    {
        return view('LaunchAttachments.index', [
            'launchAttachment' => LaunchAttachments::all(),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $launchAttachmentsData = $request->all();
        $launchAttachmentsData['creatoruser_id'] = $user->id;
    
        // Verificar se há um arquivo válido enviado
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $requestImage = $request->file('file'); // Corrigir chamada de método
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"))  . "." . $extension;
            $requestImage->move(public_path('image/launchAttachments'), $imageName);
            $launchAttachmentsData['file'] = $imageName; // Corrigir atribuição do nome do arquivo
        }
    
        LaunchAttachments::create($launchAttachmentsData);
        return redirect('/launchAttachments');
    }


/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\LaunchAttachments  $launchAttachments
 * @return \Illuminate\Http\Response
 */
public function edit(LaunchAttachments $launchAttachments)
{


}


/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\LaunchAttachments  $launchAttachments
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, LaunchAttachments $launchAttachments)
{
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaunchAttachments  $LaunchAttachments
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaunchAttachments $launchAttachment)
    {
        $launchAttachment->delete();

        return redirect('/launchAttachments');
    }
}
