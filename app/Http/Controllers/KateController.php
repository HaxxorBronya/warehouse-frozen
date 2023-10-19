<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['kategoris'] = Kategori::orderBy('id','desc')->paginate(5);
     
        return view('kategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required'
            
        ]);
 
        $kategori = new kategori;
        
        $kategori->kategori = $request->kategori;
        
 
 
        $kategori->save();
 
      
        return redirect()->route('kategoris.index')
                        ->with('success','Category has been added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return view('kategori.show',compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required'
            
        ]);
         
        $kategori = Kategori::find($id);
 
        $kategori->kategori = $request->kategori;
        
 
        $kategori->save();
     
        return redirect()->route('kategoris.index')
                        ->with('success','kategori Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
     
        return redirect()->route('kategoris.index')
                        ->with('success','Category has been deleted successfully');
    }
}
