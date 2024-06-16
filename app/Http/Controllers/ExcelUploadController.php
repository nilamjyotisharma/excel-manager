<?php

namespace App\Http\Controllers;

use App\Imports\ExcelUploadImport;
use App\Models\ExcelUpload;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ExcelUploadController extends Controller
{
    public function index(){
        return view('excel.index');
    }

    public function importExcelData(Request $request){
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv|max:2048',
        ]);

        if (ExcelUpload::count() > 0) {
            ExcelUpload::truncate();
        }

        $file = $request->file('file');
        Excel::import(new ExcelUploadImport(Auth::id()), $file);

        return redirect()->route('excel.index')->with('success', 'Excel file uploaded and data imported successfully.');
    }


    public function showExcel()
    {
        $uploads = ExcelUpload::where('user_id', Auth::id())->get();
        Log::info('file upload', [$uploads]);
        return view('excel.show', compact('uploads'));
    }

    public function deleteExcel(Request $request)
    {
        ExcelUpload::truncate();
        return redirect()->back()->with('success', 'All imported data has been deleted.');
    }

}

