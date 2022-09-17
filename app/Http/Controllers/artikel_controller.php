<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class artikel_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $artikels=\App\Models\artikel::all();
        // dd($artikels);
        return view('admin/artikel',compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/editing_artikel/tambah_artikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048000',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'author' => 'required',
            
        ]);
 
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('gambar');
 
        $nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
 
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'gambar/artikel';
        $file->move($tujuan_upload,$nama_file);
        artikel::create([
            'gambar' => $nama_file,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal'=>$request->tanggal,
            'author'=>$request->author,
        ]);
 
        alert('Data Berhasil Di Tambah');
        return redirect('/artikel')->with('data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel=artikel::where('id',$id)->first();
        return view('admin/editing_artikel/show_artikel',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel=artikel::where('id',$id)->first();
        // dd($artikel);
        return view('admin/editing_artikel/edit_artikel',compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        { 
            $request->validate([
                'gambar'=>'image|mimes:jpeg,jpg,png|max:24800'
            ]);
            
            $artikel=artikel::findorfail($id);
        if ($request->gambar==null){
            $awal=$artikel->gambar;
        }else{
            
            $file = $request->file('gambar');
            $awal=time()."_"."$request->nama"."_".$file->getClientOriginalName();
            $tujuan='gambar/artikel';
            $file->move($tujuan,$awal);
            
        }
        
        $up=[
            'gambar'=>$awal,
            'judul'=> $request['judul'],
            'deskripsi'=> $request['deskripsi'],
            'tanggal'=>$request->tanggal,
            'author'=>$request->author,
        ];
        $artikel->update($up);
            alert('Data Berhasil Di Edit');
            return redirect('artikel')->with('data berhasil ditambah');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikels=artikel::find($id);
        $artikels->delete();
        FacadesFile::delete('gambar/artikel/'.$artikels->gambar);
        alert('Data Berhasil Di Hapus');
        return redirect('/artikel')->with('data berhasil dihapus');
        
    }

}
