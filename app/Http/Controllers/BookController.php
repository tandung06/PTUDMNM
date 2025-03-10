<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;


class BookController extends Controller
{
    /* function laythongtintheloai()
    {
        $the_loai_sach = DB::table("the_loai")->get();
    return view("qlsach.the_loai",compact("the_loai_sach"));
    }
    function laythongtinsach()
    {
        $sach = DB::table("sach")->select("tieu_de","tac_gia")
        ->where("nha_xuat_ban","Văn Học")->get();
        return view("qlsach.thong_tin_sach",compact("sach"));
    } */

    function laythongtintheloai()
    {
        $the_loai_sach = Category::all();
        return view("qlsach.the_loai",compact("the_loai_sach"));
    
    }
    function laythongtinsach()
    {
        $sach = Book::where("nha_xuat_ban","Văn Học")->get();
        return view("qlsach.thong_tin_sach",compact("sach"));
    }

    function themsach()
    {
        return view("qlsach.form_them_sach");
    }

    function luutheloai(Request $request)
    {
        $id = $request->input("id");
        $ten = $request->input("ten_the_loai");

        $data = [];
        foreach($id as $key=>$value)
        {
            $data[] = ["id"=>$value,"ten_the_loai"=>$ten[$key]];
        }
        DB::table("the_loai")->insert($data);
        echo "Thêm thành công";
    }


}
