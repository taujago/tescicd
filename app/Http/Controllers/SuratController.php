<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;
use DB;

class SuratController extends Controller
{
    //
    public function index(){
        //return 'helloo controller';

        $res = Kecamatan::all();

        // dd($res);
        $arr = array('nama'=>"irwan","record"=>$res);
        return view('surat',$arr);
    }
}
