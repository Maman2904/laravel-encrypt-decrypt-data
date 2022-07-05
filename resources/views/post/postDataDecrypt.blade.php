@extends('theme.default')

@section('content')
<div class="container">
<div class="card mt-3">
<div class="card-header"><h2>Masukan data enkripsi karyawan yang akan di dekripsi</h2></div>
<div class="card-body">
<form method ="POST" action="{{ url('postData/decrypt') }}">
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

    <table class="table table-bordered" id="dynamic">  
        <tr>
        <th>Fields</th>
        <th>Action</th>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="Enter nik" name="nik[]">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama[]">
                </div>
                <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat[]">
                </div>
                <div class="form-group">
                    <label for="no_ktp">No KTP</label>
                    <input type="text" class="form-control" id="no_ktp" placeholder="Enter no_ktp" name="no_ktp[]">
                </div>
                <div class="form-group">
                    <label for="cabang_id">Cabang Id</label>
                    <input type="text" class="form-control" id="cabang_id" placeholder="Enter cabang_id" name="cabang_id[]">
                </div>
                <div class="form-group">
                    <label for="cabang">Cabang</label>
                    <input type="text" class="form-control" id="cabang" placeholder="Enter cabang" name="cabang[]">
                </div>
                <div class="form-group">
                    <label for="area_id">Area Id</label>
                    <input type="text" class="form-control" id="area_id" placeholder="Enter area_id" name="area_id[]">
                </div>
                <div class="form-group">
                    <label for="loan_id">Loan Id</label>
                    <input type="text" class="form-control" id="loan_id" placeholder="Enter loan_id" name="loan_id[]">
                </div>
                <div class="form-group">
                    <label for="region">Region</label>
                    <input type="text" class="form-control" id="region" placeholder="Enter region" name="region[]">
                </div>
                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <input type="text" class="form-control" id="wilayah" placeholder="Enter wilayah" name="wilayah[]">
                </div>
            </td>
            <td><button type="button" name="addok" id="add-btn-ok" class="btn btn-success">Add More</button></td>  
        </tr>  
    </table> 
<button type="submit" class="btn btn-success">Save</button>
</form>
</div>
</div>
</div>
@endsection


<!-- @extends('theme.default')

@section('content')<div class="row">
		<div class="container">
			<h2 class="text-center my-5">Upload Data</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="{{ url('postData/createfile') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>File</b><br/>
						<input type="file" name="file">
					</div>
 
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>

@endsection -->