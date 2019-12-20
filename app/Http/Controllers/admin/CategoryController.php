<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Model\Category;
use App\Utils\Util;

class CategoryController extends Controller
{
    public function getIndexCategory() {
        $data['listCategory'] = Util::getCategory();
        return view('backend/category', $data);
    }
    public function getIndexAddCategory() {
        return view('backend/add-edit-category');
    }

    public function getIndexUpdateCategory(Request $req) {
        $id = $req->route('id');
        $data['record'] = Util::getACategoryById($id);
        return view('backend/add-edit-category', $data);
    }

    public function addCategory(Request $req) {
        $array = array();
        $array['name'] = $req->get('name');
        $cate = Util::addCategory($array);
        if ($cate != false) {
            return redirect()->back()->withInput()->with('success', 'Thêm danh mục thành công!');
        }
        return redirect()->back()->withInput()->with('error', 'Thêm danh mục Thất bại!');
    }

    public function updateCategory(Request $req) {
        $id = $req->route('id');
        $arr = array();
        if (!empty($req->get('name'))) {
            $arr['name'] = $req->get('name');
        }
        $isUpdate = Util::updateCategoryById($id, $arr);
        if ($isUpdate) {
            return redirect()->back()->withInput()->with('success', 'Cập nhật danh mục thành công!');
        }
        return redirect()->back()->withInput()->with('error', 'Cập nhật danh mục thất bại!');
    }

    public function deleteCategoryById(Request $req) {
        $id = $req->route('id');
        $isDelete = Util::deleteCategoryById($id);
        if ($isDelete != false) {
            return redirect()->back()->withInput()->with('success', 'Xóa danh mục thành công!');
        }
        return redirect()->back()->withInput()->with('error', 'Xóa danh mục Thất bại!');
    
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
