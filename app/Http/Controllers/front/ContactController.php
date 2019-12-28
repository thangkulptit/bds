<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;
use App\Utils\Util;

class ContactController extends Controller
{
    public function getIndex() {
        $data['contact'] = $this->get();
        dd($data['contact']);
        return view('frontend/contact', $data);
    }

    public function get() {
        $find = Contact::find(1);
        $data['contact'] = $this->parseList($find);
        return $data['contact'];
    }

    private function parseList($arr) {
        if (isset($arr['list_img'])) {
            $arr['list_img'] = Util::convertImgToArrayImg($arr['list_img']);
        }
        if (isset($arr['list_name'])) {
            $arr['list_name'] = Util::convertImgToArrayImg($arr['list_name']);
        }
        if (isset($arr['list_desc'])) {
            $arr['list_desc'] = Util::convertImgToArrayImg($arr['list_desc']);
        }
        return $arr;
    }
}
