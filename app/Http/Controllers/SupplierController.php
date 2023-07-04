<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\requestSuppliers;
use App\Http\Requests\requestSupplierUpdate;

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
        // ???
    }

    public function store(requestSuppliers $request)
    {
        Supplier::create($request->all());   
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
            'supplier' => $supplier,
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
    public function update(requestSupplierUpdate $request, supplier $supplier)
    {        
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
