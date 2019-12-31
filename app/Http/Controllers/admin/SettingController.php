<?php

namespace App\Http\Controllers\admin;
use App\Utils\SettingUtil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Setting;

class SettingController extends Controller
{
    public function getView() {
        $data['setting'] = Setting::paginate(8);
        return view('backend/setting', $data);
    }

    public function getViewAdd() {
        return view('backend/add-edit-setting');
    }

    public function getViewEdit(Request $request, $id) {
        $data['record'] = Setting::find($id);
        return view('backend/add-edit-setting', $data);
    }
    
    public function addSettings(Request $request) {
        $setting = new Setting();
        $setting->type = $request->type;
        $setting->title = $request->title;
        $setting->desc = $request->desc;
        $setting->link = $request->link;
        $setting->content = $request->content;
        $setting->save();
        return redirect()->back()->withInput()->with('success', 'Thành công!');
    }

    public function updateSetting(Request $request, $id) {
        $setting = Setting::find($id);
        $setting->type = $request->type;
        $setting->title = $request->title;
        $setting->desc = $request->desc;
        $setting->link = $request->link;
        $setting->content = $request->content;
        $setting->save();
        return redirect()->back()->withInput()->with('success', 'Thành công!');
    }

    public function deleteSetting(Request $request, $id) {
        $setting = Setting::find($id);
        $setting->delete();
        return redirect()->back()->withInput()->with('success', 'Thành công!');
    }
}
