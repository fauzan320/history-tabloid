<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class siswa_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=DB::table('users')->where('is_admin', 0)->get();
        $no=1;
        return view('admin/siswa',['users'=>$users],['no'=>$no]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data soal berdasarkan id yang dipilih
        $editsiswa = DB::table('users')->where('id',$id)->first();
        // passing data soal yang didapat ke view edit.blade.php
        return view('admin/editing_siswa/edit',['editsiswa' => $editsiswa]);
        // dd($editsoal);
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
        DB::table('users')->where('id',$id)->update([
            'name' => $request->nama,
            'kelas' => $request->kelas,
            'nilai' => $request->nilai,
            
        ]);
        // Alert::success('Berhasil', 'Successfully sukses merubah no.',$id);
        // alert()->success('Berhasil', 'Successfully sukses merubah no.',$id);
        return  redirect('/siswa');
        // dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
