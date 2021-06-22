<?php

namespace App\Http\Controllers;


use App\Models\Employee as ModelsEmployee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Excel;
use App\Imports\EmployeeImport;
use App\Exports\EmployeeExport;
use App\Imports\Classimport;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        $employees = [
            ["name" => "quan", "email" => "quan@example.com", "phone" => "12345", "salary" => "100", "department" => "employ"],
            ["name" => "quan2", "email" => "qufgan@example.com", "phone" => "12345", "salary" => "100", "department" => "employ"]

        ];
        ModelsEmployee::insert($employees);
        return "record are inserted";
    }
    public function exportIntoExcel()
    {
        return FacadesExcel::download(new EmployeeExport, 'Employeelist.xlsx');
    }
    public function exportIntoCSV()
    {
        return FacadesExcel::download(new EmployeeExport, 'Employeelist.csv');
    }
    //import
    public function importForm()
    {
        return view('import-form');
    }
    public function import(Request $request)
    {
        FacadesExcel::import(new EmployeeImport, $request->file);

        return "Records are imported successfully";
    }
}
