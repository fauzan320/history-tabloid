<?php

namespace App\Models\alert;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class alert{

    // Method seperti biasanya.

    /*
    |--------------------------------------------------------------------------
    | Redirect Function
    |--------------------------------------------------------------------------
    | 
    | Berisi Function bantuan untuk Redirect
    |
    */
    public static function redirect_success_with_title($title,$message){
      return redirect('/home')->with([
        'title' => $title,
        'success' => $message,
      ]);
    }

    public static function redirect_error_with_title($title,$message){
      return redirect()->back()->with([
        'title' => $title,
        'error' => $message,
      ]);
    }

    public static function redirect_success($message){
      return redirect('/home')->with('success',$message);
    }

    public static function redirect_error($message){
      return redirect()->back()->with('error',$message);
    }
    public static function redirect_confirm(){
      // $soal=DB::table('soal')->get();
      return redirect('/soal')->with('confirm');
    }


}