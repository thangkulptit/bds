<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Inbox;

class InboxController extends Controller
{
    public function postInbox(Request $request){
        if ($request->ajax()) {
            $name = $request->name;
            $email = $request->email;
            $sdt = $request->sdt;
            $quantam = $request->quantam;
            $content = $request->content;
            $ib = new Inbox();
            $ib->fullname = $name;
            $ib->email = $email;
            $ib->phone = $sdt;
            $ib->du_an_quan_tam = $name;
            $ib->content = $content;
            $ib->status = 0;
            $ib->save();
            $rdata = [
                'rcode' => 200,
                'msg' => 'Đã thành công ! Chúng tôi sẽ liên hệ lại cho bạn sớm nhất.',
            ];
            return response()->json($rdata);
        }
        $rdata = [
            'rcode' => 500,
            'msg' => 'Lỗi nào đó'
        ];
        return response()->json($rdata);
    }
}
