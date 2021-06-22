<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employee";
    protected $fillable = ['name', 'email', 'phone', 'salary', 'department'];
    public static function getEmployees()
    {
        // $records = DB::table('employees')->select(`id`, `name`, `email`, `phone`, `salary`, `department`, `created_at`, `updated_at`);
        $records = DB::select('SELECT * FROM `employee`');
        return $records;
    }
}
