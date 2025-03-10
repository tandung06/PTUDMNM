<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use App\Models\Book;
use App\Models\Category;

class AddController extends Controller
{  
    function viewadd()
    {
        $the_loai_sach = Category::all();
        return view('add_theloai');
    }

    function addtheloai(Request $request)
    {
        $the_loai_sach = Category::all();
        foreach ($request->id as $key => $id) 
        {
            $data =
            [
                'id' => $id,
                'ten_the_loai' => $request->theloai[$key]
            ];
            Category::create($data);
        }
        // $data = ["id" => $request->id, "ten_the_loai" =>  $request->theloai];
        // Category::create($data);
        return view("add_theloai",compact("the_loai_sach"));
    }
}