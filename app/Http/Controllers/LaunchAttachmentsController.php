<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaunchAttachments;
use App\Http\Requests\requestLaunchAttachments;
use Illuminate\Support\Facades\Auth;

class LaunchAttachmentsController extends Controller
{
    public function index()
    {
        return view('LaunchAttachments.index', [
            'launchAttachment' => LaunchAttachments::all(),
            
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(requestLaunchAttachments $request)
    {
        $user = Auth::user();
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

    /**0
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
