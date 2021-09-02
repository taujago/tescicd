<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use DataTables;

class MahasiswaController extends Controller
{
    //


    function index(){
        return view('mahasiswa.mahasiswa_show');
    }


    public function getData(Request $request)
    {
        // if ($request->ajax()) {
            $data = Mahasiswa::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        // }
    }

}
