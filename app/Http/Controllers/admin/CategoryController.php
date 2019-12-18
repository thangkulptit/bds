<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Model\Category;

class CategoryController extends Controller
{
    public function getIndexCategory() {
        $data['listCategory'] = Category::get()->paginate(8);
        return view('backend/category', $data);
    }

    public function addCategory(Request $req) {

    }

    public function updateCategory(Request $req) {

    }

    public function deleteCategoryById(Request $req) {
        $id = $req->route('id');
        $cate = Category::find(1);
        $cate->delete();
    }
    public function getPathArrayImg($arrayPath){
        $stringPath = '';
        foreach ($arrayPath as $path) {
            $stringPath = $stringPath . '/images/account/'.$path . '|';
        }
        //tru di phan tu cuoi'
        return substr("$stringPath",0, strlen($stringPath)-1);
    }
    
}
