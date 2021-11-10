@extends('app')

@section('container')
  
<h2>TAMBAH DATA MAHASISWA </h2>


{!! Form::open(["url"=>"mahasiswa/simpan"]) !!}

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label> <strong>NIM : </strong> </label>
            {!! Form::text("nim", "", ["class"=>"form-control"]) !!}
            {{-- <input type="text" name="nim" id="nim" class="form-control"> --}}
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label> <strong>Nama : </strong> </label>
            {!! Form::text("nama", "", ["class"=>"form-control"]) !!}
            {{-- <input type="text" name="nim" id="nim" class="form-control"> --}}
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label> <strong>Alamat : </strong> </label>
            {!! Form::textarea("alamat", "", ["class"=>"form-control"]) !!}
            {{-- <input type="text" name="nim" id="nim" class="form-control"> --}}
        </div>
    </div>

</div>



<div class="row">

    <div class="col-md-6">
        <button class="btn btn-primary"> Simpan </button>
    </div>

</div>



{!! Form::close() !!}

  
@endsection