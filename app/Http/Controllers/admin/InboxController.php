<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function addInbox(Request $request) {
        $arr = array();
        $arr['fullname'] = $request->get('fullname');
        $arr['address'] = $request->get('address');
        $arr['phone'] = $request->get('phone');
        $arr['email'] = $request->get('email');
        $arr['content'] = $request->get('content');
        $arr['status'] = 0;

        Util::addInbox($arr);
    }

    public function getInboxDetailById(Request $request) {
        $id = $request->route('id');
        $data['inbox'] = Util::getInboxById($id);
        return view('backend/inbox-detail', $data);
    }

    public function updateStatusInboxById(Request $request) {
        $id = $request->route('id');
        Util::updateStatusInboxById($id, 1);
    }
}
