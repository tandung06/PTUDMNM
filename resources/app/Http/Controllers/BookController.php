<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    function laythongtintheloai(){
        $the_loai_sach = DB::table("the_loai")->get();
        return view("qlsach.the_loai",compact("the_loai_sach"));
    }

    function laythongtinsach(){
        $sach = DB::table("sach")->select("tieu_de","tac_gia")
                        ->where("nha_xuat_ban","Văn Học")->get();
        return view("qlsach.thong_tin_sach",compact("sach"));
    }
}

