<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\Util;

class CategoryController extends Controller
{
    public function getIndex(Request $request) {
        $action = $request->route('action');
        $listCategory = Util::getCategory();
        $checkIsValid = $this->checkAction($listCategory, $action);
        if ($checkIsValid == false) {
            return redirect()->intended('/');
        }
        $data['newsTieuBieu'] = Util::getANewsTieuBieu();
        $data['listNews'] = Util::getNewsByCategory($checkIsValid);
        $data['aCategory'] = Util::getCategoryById($checkIsValid);
        return view('frontend/category', $data);
    }
    private function checkAction($arr, $action) {
        foreach($arr as $rows) {
            if ($rows->title == $action) {
                return $rows->id;
            }
        }
        return false;
    }
}
