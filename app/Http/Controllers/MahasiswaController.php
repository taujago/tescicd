<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use DataTables;

class MahasiswaController extends Controller
{
    //


    function index(){
        // return view('app');
        return view('mahasiswa.mahasiswa_show');
    }


    public function getData(Request $request)
    {
        // if ($request->ajax()) {
            $data = Mahasiswa::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return view ('mahasiswa.mahasiswa_action',$row);
                })
                ->rawColumns(['action'])
                ->make(true);
        // }
    }

    function tambah(){
        //return 'hello';
        return view('mahasiswa.mahasiswa_tambah');
    }

    function simpan(Request $request){

        Mahasiswa::create([
            "nama" => $request->nama,
            "alamat"=> $request->alamat,
            "nim" => $request->nim
        ]);

        redirect('mahasiswa');

    }

    function hapus(Request $request){
        Mahasiswa::destroy($request->id);
        return ['error'=>false,'message'=>"Berhasil dihapus"];
    }

}
