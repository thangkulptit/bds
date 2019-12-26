<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\Util;

class HomeController extends Controller
{
    public function getIndex(Request $request) {
        $data['arrHotNews'] = Util::getAllNewsHot();
        $data['arrNews'] = Util::getAllNews();
        $data['arrSetting'] = Util::getBelowSettings();
        $data['newsTieuBieu'] = Util::getANewsTieuBieu();
        return view('frontend/home', $data);
    }
}
