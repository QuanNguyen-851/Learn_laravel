<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function index($name)
    // {
    //     return View('student.index', [
    //         "a" => $name
    //     ]);
    // }

    public function menu()
    {
        $menu = [
            "trang chủ",
            "trang cá nhân",
            "thông tin"
        ];

        return View('menu.index', [
            "a" => $menu
        ]);
    }
    public function sum($a, $b)
    {
        return View('student.sum', [
            "a" => $a,
            "b" => $b
        ]);
    }
    public function bao($id, $title)
    {
        return View('student.bao', [
            "a" => $id,
            "b" => $title
        ]);
    }
}
