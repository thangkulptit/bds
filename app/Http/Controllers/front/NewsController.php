<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\Util;
class NewsController extends Controller
{
    public function getIndexNewsDetail(Request $request) {
        $category_title = $request->route('category_title');
        $id = $request->route('id');
        $title = $request->route('title');
        
        $data['item'] = Util::getANewsById($id);
        $data['item']['url_contact'] = Util::getUrl('contact');
        if ($data['item'] != false && $data['item']['title'] == $title) {
            return view('frontend/news-detail', $data);
        }

    }
}
