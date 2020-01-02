<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\Util;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function getIndexNews() {
        $data['listNews'] = Util::getAllNews();
        return view('backend/news', $data);
    }
    public function getIndexAddNews() {
        $data['listCate'] = Util::getListCategory();
        return view('backend/add-edit-news', $data);
    }

    public function getIndexUpdateNews(Request $request) {
        $id = $request->route('id');
        $data['record'] = Util::getANewsById($id);
        $data['listCate'] = Util::getListCategory();
        return view('backend/add-edit-news', $data);
    }

    public function postAddNews(Request $request) {
        $arr = array();
        if (!empty($request->file('images1'))) {
            $arr['images1'] = Util::getListImgClient($request->file('images1'));
        }
        if (!empty($request->file('images2'))) {
            $arr['images2'] = Util::getListImgClient($request->file('images2'));
        }
        if (!empty($request->file('images3'))) {
            $arr['images3'] = Util::getListImgClient($request->file('images3'));
        }
        if (!empty($request->file('images4'))) {
            $arr['images4'] = Util::getListImgClient($request->file('images4'));
        }
        if (!empty($request->file('images5'))) {
            $arr['images5'] = Util::getListImgClient($request->file('images5'));
        }
        $arr['category_id'] = $request->get('category_id');
        $arr['title_h1'] = $request->get('title_h1');
        $arr['desc'] = $request->get('desc');
        $arr['bgr'] = Util::getListImgClient($request->file('bgr'));
        $arr['content'] = $request->get('content');
        $arr['text1'] = $request->get('text1');
        $arr['text2'] = $request->get('text2');
        $arr['text3'] = $request->get('text3');
        $arr['text4'] = $request->get('text4');
        $arr['text5'] = $request->get('text5');
        $arr['title1'] = $request->get('title1');
        $arr['title2'] = $request->get('title2');
        $arr['title3'] = $request->get('title3');
        $arr['title4'] = $request->get('title4');
        $arr['title5'] = $request->get('title5');
        $arr['hot_news'] = $request->get('hot_news');

        Util::addNews($arr);
        return redirect()->back()->withInput()->with('success', 'Thêm bài viết thành công!');
    }

    private function deleteFile($arrPath) {
        foreach($arrPath as $item) {
            $itemValid = substr($item, 1);
            if(File::exists($itemValid)) {
                File::delete($itemValid);
            }
        }
    }

    public function updateNewsById(Request $request) {
        $id = $request->route('id');
        $arr = array();
        $news = Util::getANewsById($id);
        $img1_old = $news->images1;
        $img2_old = $news->images2;
        $img3_old = $news->images3;
        $img4_old = $news->images4;
        $img5_old = $news->images5;
        $img_bgr = $news->bgr;
        
        if (!empty($request->file('images1'))) {
            $arr['images1'] = Util::getListImgClient($request->file('images1'));
            if ($img1_old != null) {
                $arrImgOld1 = Util::convertImgToArrayImg($img1_old);
                $this->deleteFile($arrImgOld1);
            }
        }
        if (!empty($request->file('images2'))) {
            $arr['images2'] = Util::getListImgClient($request->file('images2'));
            if ($img2_old != null) {
                $arrImgOld2 = Util::convertImgToArrayImg($img2_old);
                $this->deleteFile($arrImgOld2);
            }
        }
        if (!empty($request->file('images3'))) {
            $arr['images3'] = Util::getListImgClient($request->file('images3'));
            if ($img3_old != null) {
                $arrImgOld3 = Util::convertImgToArrayImg($img3_old);
                $this->deleteFile($arrImgOld3);
            }
        }
        if (!empty($request->file('images4'))) {
            $arr['images4'] = Util::getListImgClient($request->file('images4'));
            if ($img4_old != null) {
                $arrImgOld4 = Util::convertImgToArrayImg($img4_old);
                $this->deleteFile($arrImgOld2);
            }
        }
        if (!empty($request->file('images5'))) {
            $arr['images5'] = Util::getListImgClient($request->file('images5'));
            if ($img5_old != null) {
                $arrImgOld5 = Util::convertImgToArrayImg($img5_old);
                $this->deleteFile($arrImgOld5);
            };
        }
        if (!empty($request->file('bgr'))) {
            $arr['bgr'] = Util::getListImgClient($request->file('bgr'));
            if ($img_bgr != null) {
                $arrBgr = Util::convertImgToArrayImg($img_bgr);
                $this->deleteFile($arrBgr);
            }
        }
        $arr['category_id'] = $request->get('category_id');
        $arr['title_h1'] = $request->get('title_h1');
        $arr['desc'] = $request->get('desc');
        $arr['content'] = $request->get('content');
        $arr['text1'] = $request->get('text1');
        $arr['text2'] = $request->get('text2');
        $arr['text3'] = $request->get('text3');
        $arr['text4'] = $request->get('text4');
        $arr['text5'] = $request->get('text5');
        $arr['hot_news'] = $request->get('hot_news');
        
        //update
        $isUpdated = Util::updateNewsById($id, $arr);
        if ($isUpdated) {
            return redirect()->back()->withInput()->with('success', 'Sửa bài viết thành công!');
        }
        return redirect()->back()->withInput()->with('error', 'Sửa bài viết thất bại!');
        
    }

    public function deleteNewsById(Request $request) {
        $id = $request->route('id');
        $isDeleted = Util::deleteNewsById($id);
        if ($isDeleted != false) {
            return redirect()->back()->withInput()->with('success', 'Xóa bài viết thành công!');
        }
        return redirect()->back()->withInput()->with('error', 'Xóa bài viết thất bại!');
    }

    public function updateHot(Request $request) {
        $id = $request->route('id');
        if (Util::updateHotDetail($id)) {
            return redirect()->back()->withInput()->with('success', 'Thành công!');
        }
    }

}
