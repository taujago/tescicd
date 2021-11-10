@extends('app')


@section('container')
    
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
 
    
 
    <h2 class="mb-4">DATA MAHASISWA</h2>

    <div class="row mb-3">
        <div class="col-md-2">
            <a class="btn btn-primary" href="{{ url("mahasiswa/tambah") }}"> Tambah baru 
            </a>
        </div>
    </div>

    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
 
   
</body>
@endsection


@section('js')
    

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('mahasiswa/getdata') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nim', name: 'nim'},
            {data: 'nama', name: 'nama'},
            {data: 'alamat', name: 'alamat'},          
            {
                data: 'action', 
                name: 'action', 
                orderable: false, 
                searchable: false
            },
        ]
    });
    
  });


function hapus(id){
     

    jawab =  confirm('apakah andayakin hapus ? ');

    if(jawab) { 
    $.ajax({
        url : '{{ url('mahasiswa/hapus') }}',
        type : 'post',
        dataType : 'json',
        data : {id : id, _token : '{{ csrf_token() }}'}, 
        success : function(obj){
            // swal.fire('Info',obj.message,'success');
            alert('data berhasildihapus');
            table.ajax.reload(false);
        }

    });
    }

}

</script>
 
@endsection
