<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;
use App\Utils\Util;

class ContactController extends Controller
{
    public function getIndex() {
        $data['contact'] = Contact::find(1);
        return view('backend/contact', $data);
    }

    public function getIndexUpdate() {
        $data['contact'] = Contact::find(1);
        return view('backend/add-edit-contact', $data);
    }

    public function update(Request $request) {
        $arr = array();
        if (!empty($request->file('list_img'))) {
            $arr['list_img'] = Util::getListImgClient($request->file('list_img'));
        }
        $arr['title'] = $request->get('title');
        $arr['desc'] = $request->get('desc');

        $arr['address'] = $request->get('address');
        if (!empty($request->file('bgr'))) {
            $arr['bgr'] = Util::getListImgClient($request->file('bgr'));
        }
        $arr['phone'] = $request->get('phone');
        $arr['hour_online'] = $request->get('hour_online');
        $arr['gap_go_doi_ngu_title'] = $request->get('gap_go_doi_ngu_title');
        $arr['gap_go_doi_ngu_desc'] = $request->get('gap_go_doi_ngu_desc');
        $arr['list_desc'] = $request->get('list_desc');
        $arr['list_name'] = $request->get('list_name');
        Util::updateContact($arr);
        return redirect()->back()->withInput()->with('success', 'Thành công!');
    }

}
