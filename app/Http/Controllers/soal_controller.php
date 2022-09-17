<?php

namespace App\Http\Controllers;

use Database\Seeders\soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class soal_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal=DB::table('soal')->get();
        // $soalp= soal.substring(0,20);
        $no=1;
        return view('admin/list_soal',['soal'=>$soal],['no'=>$no]);
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
        $editsoal = DB::table('soal')->where('id',$id)->first();
        // passing data soal yang didapat ke view edit.blade.php
        return view('admin/editing_soal/edit',['editsoal' => $editsoal]);
        // dd($editsoal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        DB::table('soal')->where('id',$id)->update([
            'pertanyaan' => $request->pertanyaan,
            'a' => $request->a,
            'b' => $request->b,
            'c' => $request->c,
            'd' => $request->d,
            'e' => $request->e,
            'kunci' => $request->kunci,
            
        ]);
        // Alert::success('Berhasil', 'Successfully sukses merubah no.',$id);
        // alert()->success('Berhasil', 'Successfully sukses merubah no.',$id);
        return  redirect('/listsoal');
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
