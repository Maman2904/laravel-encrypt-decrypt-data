<?php

namespace App\Http\Controllers;

// use Facade\FlareClient\Http\Response;
use App\Http\Controllers\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Storage;
use File;
use Repsonse;

class PostDataController extends Controller
{
    //
    public function create()
    {
        $data = 1;
        return view('post.postDataEncrypt',  ['name' => $data]);
    }

    public function createfile()
    {
        $data = 0;
        return view('post.postDataEncrypt', ['name' => $data]);
    }

    public function storefile(Request $request){
        // $file = $request->file('file');
        // $originalname = $file->getClientOriginalName();
        // $file->storeAs('public/result_file', $originalname);

        $nik = $request->nik;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $no_ktp = $request->no_ktp;
        $cabang_id = $request->cabang_id;
        $cabang = $request->cabang;
        $area_id = $request->area_id;
        $loan_id = $request->loan_id;
        $region = $request->region;
        $wilayah = $request->wilayah;

        
        foreach ($nik as $value) {
            $nik_val[] = $this->deskripsi($value);
        }
        
        foreach ($nama as $value) {
            $nama_val[] = $this->deskripsi($value);
        }
        foreach ($alamat as $value) {
            $alamat_val[] = $this->deskripsi($value);
        }
        foreach ($no_ktp as $value) {
            $no_ktp_val[] = $this->deskripsi($value);
        }
        foreach ($cabang_id as $value) {
            $cabang_id_val[] = $this->deskripsi($value);
        }
        foreach ($cabang as $value) {
            $cabang_val[] = $this->deskripsi($value);
        }
        foreach ($area_id as $value) {
            $area_id_val[] = $this->deskripsi($value);
        }
        foreach ($loan_id as $value) {
            $loan_id_val[] = $this->deskripsi($value);
        }
        foreach ($region as $value) {
            $region_val[] = $this->deskripsi($value);
        }
        foreach ($wilayah as $value) {
            $wilayah_val[] = $this->deskripsi($value);
        }

        $header1 = array('NIK');
        $header2 = array('NAMA');
        $header3 = array('ALAMAT');
        $header4 = array('NO KTP');
        $header5 = array('CABANG ID');
        $header6 = array('CABANG');
        $header7 = array('AREA ID');
        $header8 = array('LOAN ID');
        $header9 = array('REGION');
        $header10 = array('WILAYAH');

        $nik_val = array_merge($header1,$nik_val);
        $nama_val = array_merge($header2,$nama_val);
        $alamat_val = array_merge($header3,$alamat_val);
        $no_ktp_val = array_merge($header4,$no_ktp_val);
        $cabang_id_val = array_merge($header5,$cabang_id_val);
        $cabang_val = array_merge($header6,$cabang_val);
        $area_id_val = array_merge($header7,$area_id_val);
        $loan_id_val = array_merge($header8,$loan_id_val);
        $region_val = array_merge($header9,$region_val);
        $wilayah_val = array_merge($header10,$wilayah_val);

        // dd($nik_val);

        $d = array_map(null, $nik_val, $nama_val, $alamat_val, $no_ktp_val, $cabang_id_val, $cabang_val, $area_id_val, $loan_id_val, $region_val, $wilayah_val);

        $path_download = $this->insert_to_page($d, 'A1', 'd');

        $path = public_path($path_download);
        // $content = file_get_contents($path);

        echo "<script>";
        echo "alert('encrypted data sucsessfully');";
        echo "</script>";
        
        // return response($content)->withHeaders([
        //     "Content-Type" => "Application/xlsx"
        // ]);
        return response()->download($path);
          
    }
        
       

    public function store(Request $request)
    {

        $nik = $request->nik;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $no_ktp = $request->no_ktp;
        $cabang_id = $request->cabang_id;
        $cabang = $request->cabang;
        $area_id = $request->area_id;
        $loan_id = $request->loan_id;
        $region = $request->region;
        $wilayah = $request->wilayah;

        
        foreach ($nik as $value) {
            $nik_val[] = $this->enkripsi($value);
        }
        
        foreach ($nama as $value) {
            $nama_val[] = $this->enkripsi($value);
        }
        foreach ($alamat as $value) {
            $alamat_val[] = $this->enkripsi($value);
        }
        foreach ($no_ktp as $value) {
            $no_ktp_val[] = $this->enkripsi($value);
        }
        foreach ($cabang_id as $value) {
            $cabang_id_val[] = $this->enkripsi($value);
        }
        foreach ($cabang as $value) {
            $cabang_val[] = $this->enkripsi($value);
        }
        foreach ($area_id as $value) {
            $area_id_val[] = $this->enkripsi($value);
        }
        foreach ($loan_id as $value) {
            $loan_id_val[] = $this->enkripsi($value);
        }
        foreach ($region as $value) {
            $region_val[] = $this->enkripsi($value);
        }
        foreach ($wilayah as $value) {
            $wilayah_val[] = $this->enkripsi($value);
        }

        $header1 = array('NIK');
        $header2 = array('NAMA');
        $header3 = array('ALAMAT');
        $header4 = array('NO KTP');
        $header5 = array('CABANG ID');
        $header6 = array('CABANG');
        $header7 = array('AREA ID');
        $header8 = array('LOAN ID');
        $header9 = array('REGION');
        $header10 = array('WILAYAH');

        $nik_val = array_merge($header1,$nik_val);
        $nama_val = array_merge($header2,$nama_val);
        $alamat_val = array_merge($header3,$alamat_val);
        $no_ktp_val = array_merge($header4,$no_ktp_val);
        $cabang_id_val = array_merge($header5,$cabang_id_val);
        $cabang_val = array_merge($header6,$cabang_val);
        $area_id_val = array_merge($header7,$area_id_val);
        $loan_id_val = array_merge($header8,$loan_id_val);
        $region_val = array_merge($header9,$region_val);
        $wilayah_val = array_merge($header10,$wilayah_val);

        // dd($nik_val);

        $d = array_map(null, $nik_val, $nama_val, $alamat_val, $no_ktp_val, $cabang_id_val, $cabang_val, $area_id_val, $loan_id_val, $region_val, $wilayah_val);

        $path_download = $this->insert_to_page($d, 'A1', 'e');

        // dd($path_download);

        echo "<script>";
        echo "alert('encrypted data sucsessfully');";
        echo "</script>";
        $path = public_path($path_download);
        // $content = file_get_contents($path_download);
        // dd($path);

        return response()->download($path);


        // return $this->download($path_download);
        // Storage::get('public/enkripsi');

        // return response()->download($filepath);

    }

        public function download($path){

            $filepath = public_path($path);
            response()->download($filepath); 
        }
        
        public function enkripsi($data){
            $encrypted = Crypt::encryptString($data);
            return $encrypted;
        }
    
        public function deskripsi($data){
            $decrypted = Crypt::decryptString($data);
    
            return $decrypted;
        }
        
        public function insert_to_page($data, $column, $encdec)
        {

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->fromArray($data, NULL, $column);

            $writer = new Xlsx($spreadsheet);

            $path = '';
            if ($encdec == 'e'){
                $path = 'storage\result_file\enc\enkripsi.xlsx';
                
            }
            else{
                $path = 'storage\result_file\dec\deskripsi.xlsx';
            }

            $writer->save($path);

            return $path;

        }
        // public function proses(){
    //     $Pass = "Passwort";
    //     $Clear = "Klartext";        
    
    //     $crypted = thisfnEncrypt($Clear, $Pass);
    //     echo "Encrypred: ".$crypted."</br>";
    
    //     $newClear = fnDecrypt($crypted, $Pass);
    //     echo "Decrypred: ".$newClear."</br>";        

    // }


    // public function fnEncrypt($sValue, $sSecretKey)
    // {
    //     return rtrim(
    //         base64_encode(
    //             mcrypt_encrypt(
    //                 MCRYPT_RIJNDAEL_256,
    //                 $sSecretKey, $sValue, 
    //                 MCRYPT_MODE_ECB, 
    //                 mcrypt_create_iv(
    //                     mcrypt_get_iv_size(
    //                         MCRYPT_RIJNDAEL_256, 
    //                         MCRYPT_MODE_ECB
    //                     ), 
    //                     MCRYPT_RAND)
    //                 )
    //             ), "\0"
    //         );
    // }

    // public function fnDecrypt($sValue, $sSecretKey)
    // {
    //     return rtrim(
    //         mcrypt_decrypt(
    //             MCRYPT_RIJNDAEL_256, 
    //             $sSecretKey, 
    //             base64_decode($sValue), 
    //             MCRYPT_MODE_ECB,
    //             mcrypt_create_iv(
    //                 mcrypt_get_iv_size(
    //                     MCRYPT_RIJNDAEL_256,
    //                     MCRYPT_MODE_ECB
    //                 ), 
    //                 MCRYPT_RAND
    //             )
    //         ), "\0"
    //     );
    // }

    // public function enkripsi($data){
	// 	$encrypted = Crypt::encryptString($data);
    //     return $encrypted;
	// 	// $decrypted = Crypt::decryptString($encrypted);
 
	// 	// echo "Hasil Enkripsi : " . $encrypted;
	// 	// echo "<br/>";
	// 	// echo "<br/>";
	// 	// echo "Hasil Dekripsi : " . $decrypted;
	// }

}
