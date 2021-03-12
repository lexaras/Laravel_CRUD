<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CampingsExport;
use App\Imports\CampingsImport;

class ImportExportController extends Controller
{

    public function importExport()
    {
       return view('welcome');
    }
   
    public function importFile(Request $request) 
    {
        Excel::import(new CampingsImport, $request->file('file')->store('temp'));
        return back();
    }

    public function exportFile() 
    {
        ob_end_clean(); // this
        ob_start(); // and this
        return Excel::download(new CampingsExport, 'campings-list.xlsx');
    }  
}