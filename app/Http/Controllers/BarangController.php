<?php
   
namespace App\Http\Controllers;
    
use App\Models\Barang;
use Illuminate\Http\Request;
use PDF;
   
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barangs'] = Barang::orderBy('id','desc')->paginate(5);
     
        return view('barang.index', $data);
    }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
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
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required'
        ]);
 
        $barang = new barang;
 
        $barang->nama_barang = $request->nama_barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
 
 
        $barang->save();
 
      
        return redirect()->route('barangs.index')
                        ->with('success','barang has been created successfully.');
    }
      
    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('barang.show',compact('barang'));
    } 
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit',compact('barang'));
    }
     
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
        ]);
         
        $barang = Barang::find($id);
 
        $barang->nama_barang = $request->nama_barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
 
        $barang->save();
     
        return redirect()->route('barangs.index')
                        ->with('success','Barang Has Been updated successfully');
    }
     
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
     
        return redirect()->route('barangs.index')
                        ->with('success','inventory has been deleted successfully');
    }

    public function export(){
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $data = PDF::loadview('barang/index', ['data' => 'ini adalah contoh laporan PDF']);
        //mendownload laporan.pdf
        return $data->download('laporan.pdf');
    }
}