<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\Util;

class InboxController extends Controller
{
    public function getIndexInbox() {
        $data['listInbox'] = Util::getAllInbox();
        return view('backend/inbox', $data);
    }

    public function getInboxDetail(Request $request, $id){
        $data['inbox'] = Util::getInboxById($id);
        Util::updateStatusInboxById($id, 1);
        return view('backend/inbox-detail', $data);
    }

    public function deleteInboxById(Request $req, $id) {
        $isDelete = Util::deleteInboxById($id);
        if ($isDelete) {
            return redirect()->back()->withInput()->with('success', 'Thành công!'); 
        }
    }
}
