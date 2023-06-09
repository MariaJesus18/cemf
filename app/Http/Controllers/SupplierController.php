<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supplier.index', [
            'suppliers' => Supplier::all(),
            'contracts' => Contract::all(),
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
    public function store(Request $request)
    {
        $user = auth()->user();
        $requestData = $request->all();
        $requestData['creatoruser_id'] = $user->id;
        $requestData['status'] = true;
        $createdsupplier = Supplier::create($requestData);
        
        return redirect('/suppliers');
    }
    
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(supplier $supplier)
    {
        
        return view('supplier.edit', [
            'suppliers' => supplier::find($supplier->id),
            'contracts' => Contract::all(),
        ]);
    
    }
    
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, supplier $supplier)
    {
        $supplierInstance = supplier::find($supplier->id);
        
        $supplierInstance->update($request->all());

        $user = auth()->user();
        $supplier = $supplier::find($supplier->id);
        $supplier['editoruser_id'] = $user->id;
        $supplier->update($request->all());
    
        return redirect('/suppliers');
    }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\supplier  $supplier
         * @return \Illuminate\Http\Response
         */
        public function destroy(supplier $supplier)
        {
            $supplier->delete();
    
            return redirect('/suppliers');
        }
}
