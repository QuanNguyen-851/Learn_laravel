<?php

namespace App\Exports;

use App\Models\Employee as ModelsEmployee;
use App\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {

        return [
            'Id',
            'Name',
            'Email',
            'Phone',
            'salary',
            'Department',
        ];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return EmployeeExport::all();
        return collect(ModelsEmployee::getEmployees());
    }
}
