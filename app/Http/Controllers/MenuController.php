<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {
        $menu = [
            "trang-chu" => "Trang chủ",
            "trang-ca-nhan" => "Trang cá nhân",
            "thong-tin" => "Thông tin"
        ];
        return View('menu/index', [
            "menu" => $menu
        ]);
    }
    public function trangChu()
    {
        return View('menu/trangChu');
    }

    public function trangCaNhan()
    {
        return View('menu/trangCaNhan');
    }
}
