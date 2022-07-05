<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class HomeController extends Controller
{
    //

    public function home()
    {
        return view('home');
    }

   
    /**
     * Show the my users page.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        return view('users');
    }
}
