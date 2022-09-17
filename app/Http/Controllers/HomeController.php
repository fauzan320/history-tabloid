<?php

namespace App\Http\Controllers;

use App\Models\alert\alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
// use Alert;
use App\Models\alert\alert as AlertAlert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('siswa/home');
    }
    public function adminHome()
    {
        return view('admin/home_admin');
    }
    public function respon()
    {   
        return view('respon');
    }
    public function soal()
    {   
        $soal=DB::table('soal')->get();
        // return Alert::redirect_confirm();
        return view('siswa/ujian',['soal'=>$soal]);
    }
    public function tabloid()
    {   
        return view('siswa/tabloid');
    }
    public function tabloid2()
    {   
        return view('siswa/tabloid2');
    }
    public function tabloid3()
    {   
        return view('siswa/tabloid3');
    }
    public function tabloid4()
    {   
        return view('siswa/tabloid4');
    }
    public function tabloid5()
    {   
        return view('siswa/tabloid5');
    }
    public function tabloid6()
    {   
        return view('siswa/tabloid6');
    }
    public function tabloidtest()
    {   
        return view('siswa/tabloidtest');
    }

    public function post(Request $request)
    {   
        $soal=DB::table('soal')->get();
        $kunci=[];
        //untuk memasukan kunci jawaban ke array kunci
        foreach($soal as $s){
            $kunci[]=$s->kunci;
        }
        $jawab=[];
        $betul=0;
        $salah=0;
        $kosong=0;
        $total=0;
        //untuk memasukan jawaban user ke array jawaban
        for ($i=1; $i < 21; $i++) { 
            $jawab[]=$request->$i;
        }
        //untuk cek jawaban dengan kunci agar mendapat total nilai 
        for ($i=0; $i < 20; $i++) { 
            if ($jawab[$i]==$kunci[$i]) {
                $betul+=1;
            } elseif ($jawab[$i]==null) {
                $kosong+=1;
            } else{
                $salah+=1;
            }
        }
        $total=$betul*5;
        DB::table('users')->where('id', Auth::user()->id)->update([
            'nilai' => $total,
            
        ]);

        $pesan1=('Nilaimu adalah '. $total);
        $pesan2=('Benar = ' . $betul.' ' .', Salah = ' . $salah.' ' .', dan Tidak Diisi = ' . $kosong);
        
        
        return alert::redirect_success_with_title($pesan1,$pesan2);
    }
}
