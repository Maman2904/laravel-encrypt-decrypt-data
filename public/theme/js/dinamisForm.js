var i = 1;
$("#add-btn").click(function(){
++i;

let newInputan = `<tr>
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
    <td><button type="button" class="btn btn-danger remove-tr">Remove</button></td>
</tr>`
$("#dynamicAddRemove").append(newInputan)

// $("#dynamicAddRemove").append('<tr><td><div class="form-group"><label for="nik">NIK</label><input type="text" class="form-control" id="nik" placeholder="Enter nik" name="nik['+i+']"></div><div class="form-group"><label for="nama">Nama</label><input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama['+i+']"></div><div class="form-group"><label for="alamat">Alamat</label><input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat['+i+']"></div><div class="form-group"><label for="no_ktp">No KTP</label><input type="text" class="form-control" id="no_ktp" placeholder="Enter no_ktp" name="no_ktp['+i+']"></div><div class="form-group"><label for="cabang_id">Cabang Id</label><input type="text" class="form-control" id="cabang_id" placeholder="Enter cabang_id" name="cabang_id['+i+']"></div><div class="form-group"><label for="cabang">Cabang</label><input type="text" class="form-control" id="cabang" placeholder="Enter cabang" name="cabang['+i+']"></div><div class="form-group"><label for="area_id">Area Id</label><input type="text" class="form-control" id="area_id" placeholder="Enter area_id" name="area_id['+i+']"></div><div class="form-group"><label for="loan_id">Loan Id</label><input type="text" class="form-control" id="loan_id" placeholder="Enter loan_id" name="loan_id['+i+']"></div><div class="form-group"><label for="region">Region</label><input type="text" class="form-control" id="region" placeholder="Enter region" name="region['+i+']"></div><div class="form-group"><label for="wilayah">Wilayah</label><input type="text" class="form-control" id="wilayah" placeholder="Enter wilayah" name="wilayah['+i+']"></div></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');//
});

$(document).on('click', '.remove-tr', function(){  
$(this).parents('tr').remove();
});  