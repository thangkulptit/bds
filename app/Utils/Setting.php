<?php
namespace App\Utils;
use App\Model\Category;
use App\Model\News;
use App\Model\Inbox;
use App\Model\Setting;
use Illuminate\Support\Facades\DB;

class SettingUtil {
    protected $setting;
    public function __contructor(SettingUtil $setting) {
        $this->setting = $setting;
    }
    //setting
    public static function getSettings() {
        //setting = 0 : Duoi' Header
        return Setting::where('type', 0)->limit(4)->paginate(8);
    }

    public static function findLienHeSettings() {
        //lien he seting
        return Setting::where('type', 1)->limit(1)->get();
    }

    public static function addSetting($arrSetting) {
        $st = new Setting();
        $st->type = $arrSetting['type'];
        $st->title = $arrSetting['title'];
        $st->desc = $arrSetting['desc'];
        $st->link = $arrSetting['link'];
        $st->content = $arrSetting['content'];
        $st->save();
    }
    public static function updateSettingById($id, $arrSetting) {
        $st = new Setting();
        if (isset($arrSetting['type'])) {
            $st->type = $arrSetting['type'];
        }
        if (isset($arrSetting['title'])) {
            $st->title = $arrSetting['title'];
        }
        if (isset($arrSetting['desc'])) {
            $st->desc = $arrSetting['desc'];
        }
        if (isset($arrSetting['link'])) {
            $st->link = $arrSetting['link'];
        }
        if (isset($arrSetting['content'])) {
            $st->content = $arrSetting['content'];
        }
        $st->save();
    }
    public static function deleteSettingById($id) {
       $a = Setting::find($id);
       $a->delete();
    }
}
?>