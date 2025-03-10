<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ThemController extends Controller
{
    function view_them()
    {
        $the_loai_sach = Category::all();
        return view('themtheloai');
    }

    function them_theloai(Request $request)
    {
        $the_loai_sach = Category::all();
        $data = ["id" => $request->nhap_id, "ten_the_loai" =>  $request->nhap_theloai];
        Category::create($data);
        /* 
        $catrgory = new Category;
        $catrgory -> id = 
        $catrgory -> ten_the_loai = 
        $catrgory -> save(); 
        */
        return view("themtheloai",compact("the_loai_sach"));
    }
}
