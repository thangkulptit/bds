<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Model\Category;
use App\Utils\Util;

class CategoryController extends Controller
{
    public function getIndexCategory() {
        $data['listCategory'] = Category::get()->paginate(8);
        return view('backend/category', $data);
    }

    public function addCategory(Request $req) {
        $name = $req->get('name');
        Util::addCategory($name);
        return redirect()->back()->withInput()->with('success', 'Thêm bài viết thành công!');
    }

    public function updateCategory(Request $req) {
        $id = $req->route('id');
        $arr = array();
        if (!empty($req->get('name'))) {
            $arr['name'] = $req->get('name');
        }
        Util::updateCategoryById($id, $arr);
        return redirect()->back()->withInput()->with('success', 'Cập nhật bài viết thành công!');
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
