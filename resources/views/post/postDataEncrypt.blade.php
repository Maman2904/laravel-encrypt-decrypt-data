@extends('theme.default')

@section('content')
<div class="container">
<div class="card mt-3">
@if ( $name == 1)
    <div class="card-header"><h2>Masukan data karyawan yang akan di enkripsi</h2></div>
    <div class="card-body">

    <form method ="POST" action="{{ url('postData/encrypt') }}" enctype="multipart/form-data">
@else
    <div class="card-header"><h2>Masukan data enkripsi karyawan yang akan di dekripsi</h2></div>
    <div class="card-body">

    <form method ="POST" action="{{ url('postData/decrypt') }}" enctype="multipart/form-data">
@endif
@csrf
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if (Session::has('success'))
<div class="alert alert-success text-center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <p>{{ Session::get('success') }}</p>
</div>
@endif

    <table class="table table-bordered" id="dynamicAddRemove">  
        <tr>
        <th>Fields</th>
        <th>Action</th>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="Enter nik" name="nik[]" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama[]" required>
                </div>
                <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat[]" required>
                </div>
                <div class="form-group">
                    <label for="no_ktp">No KTP</label>
                    <input type="text" class="form-control" id="no_ktp" placeholder="Enter no_ktp" name="no_ktp[]" required>
                </div>
                <div class="form-group">
                    <label for="cabang_id">Cabang Id</label>
                    <input type="text" class="form-control" id="cabang_id" placeholder="Enter cabang_id" name="cabang_id[]" required>
                </div>
                <div class="form-group">
                    <label for="cabang">Cabang</label>
                    <input type="text" class="form-control" id="cabang" placeholder="Enter cabang" name="cabang[]" required>
                </div>
                <div class="form-group">
                    <label for="area_id">Area Id</label>
                    <input type="text" class="form-control" id="area_id" placeholder="Enter area_id" name="area_id[]" required>
                </div>
                <div class="form-group">
                    <label for="loan_id">Loan Id</label>
                    <input type="text" class="form-control" id="loan_id" placeholder="Enter loan_id" name="loan_id[]" required>
                </div>
                <div class="form-group">
                    <label for="region">Region</label>
                    <input type="text" class="form-control" id="region" placeholder="Enter region" name="region[]" required>
                </div>
                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <input type="text" class="form-control" id="wilayah" placeholder="Enter wilayah" name="wilayah[]" required>
                </div>
            </td>
            <td><button type="button" name="add" id="add-btn" class="btn btn-success">Add More</button></td>  
        </tr>  
    </table> 
<button type="submit" class="btn btn-success">Save</button>
</form>
</div>
</div>
</div>
@endsection
