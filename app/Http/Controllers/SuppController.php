<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

use DataTables;

class SuppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['suppliers'] = Supplier::orderBy('id','desc')->paginate(5);
     
        return view('supplier.index', $data);
    }

 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required'
        ]);
 
        $supplier = new supplier;
        
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->nomor_hp = $request->nomor_hp;
        $supplier->alamat = $request->alamat;
        
 
 
        $supplier->save();
 
      
        return redirect()->route('suppliers.index')
                        ->with('success','supplier has been added successfully.');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return view('supplier.show',compact('supplier'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('supplier.edit',compact('supplier'));
    }
/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required'
            
        ]);
         
        $supplier = Supplier::find($id);
 
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->nomor_hp = $request->nomor_hp;
        $supplier->alamat = $request->alamat;
        
 
        $supplier->save();
     
        return redirect()->route('suppliers.index')
                        ->with('success','supplier Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
     public function destroy(Supplier $supplier)
    {
        $supplier->delete();
     
        return redirect()->route('suppliers.index')
                        ->with('success','supplier has been deleted successfully');
    }
}
