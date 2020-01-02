<?php
namespace App\Utils;
use App\Model\Category;
use App\Model\News;
use App\Model\Inbox;
use App\Model\Setting;
use App\Model\Contact;
use Illuminate\Support\Facades\DB;

class Util {
    protected $util;
    public function __contructor(Util $util) {
        $this->util = $util;
    }
    //setting
    public static function getBelowSettings() {
        //setting = 0 : Duoi' Header
        return Setting::where('type', 1)->limit(4)->paginate(8);
    }

    public static function findLienHeSettings() {
        //lien he seting
        return Setting::where('type', 1)->limit(1)->get();
    }
    public static function addSetting() {
        //lien he seting
        $st = new Setting();
    }
    public static function getUrlYoutube() {
        return DB::select('SELECT link FROM settings WHERE type = 2 limit 1');
        // return Setting::where('type', 2)->limit(1)->get();
    }

    public static function getContact() {
        return Contact::find(1);
    }
    public static function updateContact($arrNews) {
        $news = Contact::find(1);
        if (isset($arrNews['title'])) {
            $news->title = $arrNews['title'];
        }
        if (isset($arrNews['bgr'])) {
            $news->bgr = $arrNews['bgr'];
        }
        if (isset($arrNews['desc'])) {
            $news->desc = $arrNews['desc'];
        }
        if (isset($arrNews['address'])) {
            $news->address = $arrNews['address'];
        }
        if (isset($arrNews['phone'])) {
            $news->phone = $arrNews['phone'];
        }
        if (isset($arrNews['hour_online'])) {
            $news->hour_online = $arrNews['hour_online'];
        }
        if (isset($arrNews['gap_go_doi_ngu_title'])) {
            $news->gap_go_doi_ngu_title = $arrNews['gap_go_doi_ngu_title'];
        }
        if (isset($arrNews['gap_go_doi_ngu_desc'])) {
            $news->gap_go_doi_ngu_desc = $arrNews['gap_go_doi_ngu_desc'];
        }
        if (isset($arrNews['list_img'])) {
            $news->list_img = $arrNews['list_img'];
        }
        if (isset($arrNews['list_name'])) {
            $news->list_name = $arrNews['list_name'];
        }
        if (isset($arrNews['list_desc'])) {
            $news->list_desc = $arrNews['list_desc'];
        }
        $news->save();
    }

    //category
    public static function getCategory() {
        return Category::paginate(8);
    }
    public static function getCategoryById($id) {
        return Category::find($id);
    }

    public static function getListCategory() {
        return Category::get();
    }

    public static function addCategory($arrCategory) {
        $category = new Category();
        if (isset($arrCategory['name'])) {
            $category->name = $arrCategory['name'];
            $category->title = Util::removeUnicode($arrCategory['name']);
            return $category->save();
        }
        return false;
    }
    public static function deleteCategoryById($id) {
        if (isset($id)) {
            $category = Category::find($id);
            $category->delete();
            return true;
        }
        return false;
    }
    public static function getACategoryById($id) {
        if (isset($id)) {
            $category = Category::find($id);
            return $category;
        }
    }

    public static function updateCategoryById($id, $arrCategory) {
        if (isset($id)) {
            $category = Category::find($id);
            if ($arrCategory['name']) {
                $category->name = $arrCategory['name'];
                $category->title = Util::removeUnicode($arrCategory['name']);
                $category->save();
                return true;
            }
        }
        return false;
    }
    //News
    public static function addNews($arrNews) {
        $news = new News();
        if (isset($arrNews['category_id'])) {
            $news->category_id = $arrNews['category_id'];
        }
        if (isset($arrNews['title_h1'])) {
            $news->title_h1 = $arrNews['title_h1'];
            $news->title = Util::removeUnicode($arrNews['title_h1']);
        }
        if (isset($arrNews['desc'])) {
            $news->desc = $arrNews['desc'];
        }
        if (isset($arrNews['bgr'])) {
            $news->bgr = $arrNews['bgr'];
            
        }
        if (isset($arrNews['content'])) {
            $news->content = $arrNews['content'];
        }
        if (isset($arrNews['title1'])) {
            $news->title1 = $arrNews['title1'];
        }
        if (isset($arrNews['images1'])) {
            $news->images1 = $arrNews['images1'];
        }
        if (isset($arrNews['text1'])) {
            $news->text1 = $arrNews['text1'];
        }
        if (isset($arrNews['title2'])) {
            $news->title2 = $arrNews['title2'];
        }
        if (isset($arrNews['images2'])) {
            $news->images2 = $arrNews['images2'];
        }
        if (isset($arrNews['text2'])) {
            $news->text2 = $arrNews['text2'];
        }
        if (isset($arrNews['title3'])) {
            $news->title3 = $arrNews['title3'];
        }
        if (isset($arrNews['images3'])) {
            $news->images3 = $arrNews['images3'];
        }        
        if (isset($arrNews['text3'])) {
            $news->text3 = $arrNews['text3'];
        }
        if (isset($arrNews['title4'])) {
            $news->title4 = $arrNews['title4'];
        }    
        if (isset($arrNews['text4'])) {
            $news->text4 = $arrNews['text4'];
        }        
        if (isset($arrNews['images4'])) {
            $news->images4 = $arrNews['images4'];
        }
        if (isset($arrNews['title5'])) {
            $news->title5 = $arrNews['title5'];
        }     
        if (isset($arrNews['text5'])) {
            $news->text5 = $arrNews['text5'];
        }        
        if (isset($arrNews['images5'])) {
            $news->images5 = $arrNews['images5'];
        }        
        if (isset($arrNews['hot_news'])) {
            $news->hot_news = $arrNews['hot_news'];
        }
        $news->save();
    }

    public static function updateNewsById($id, $arrNews) {
        if (!isset($id) || !isset($arrNews)) {
            return false;
        }
        $news = News::find($id);
        if (isset($arrNews['category_id'])) {
            $news->category_id = $arrNews['category_id'];
        }
        if (isset($arrNews['title_h1'])) {
            $news->title_h1 = $arrNews['title_h1'];
            $news->title = Util::removeUnicode($arrNews['title_h1']);
        }
        if (isset($arrNews['desc'])) {
            $news->desc = $arrNews['desc'];
        }
        if (isset($arrNews['bgr'])) {
            $news->bgr = $arrNews['bgr'];
        }
        if (isset($arrNews['content'])) {
            $news->content = $arrNews['content'];
        }
        if (isset($arrNews['title1'])) {
            $news->title1 = $arrNews['title1'];
        }
        if (isset($arrNews['images1'])) {
            $news->images1 = $arrNews['images1'];
        }
        if (isset($arrNews['text1'])) {
            $news->text1 = $arrNews['text1'];
        }
        if (isset($arrNews['title2'])) {
            $news->title2 = $arrNews['title2'];
        }
        if (isset($arrNews['images2'])) {
            $news->images2 = $arrNews['images2'];
        }
        if (isset($arrNews['text2'])) {
            $news->text2 = $arrNews['text2'];
        }
        if (isset($arrNews['title3'])) {
            $news->title3 = $arrNews['title3'];
        }
        if (isset($arrNews['images3'])) {
            $news->images3 = $arrNews['images3'];
        }        
        if (isset($arrNews['text3'])) {
            $news->text3 = $arrNews['text3'];
        }
        if (isset($arrNews['title4'])) {
            $news->title4 = $arrNews['title4'];
        }    
        if (isset($arrNews['text4'])) {
            $news->text4 = $arrNews['text4'];
        }        
        if (isset($arrNews['images4'])) {
            $news->images4 = $arrNews['images4'];
        }
        if (isset($arrNews['title5'])) {
            $news->title5 = $arrNews['title5'];
        }     
        if (isset($arrNews['text5'])) {
            $news->text5 = $arrNews['text5'];
        }        
        if (isset($arrNews['images5'])) {
            $news->images5 = $arrNews['images5'];
        }        
        if (isset($arrNews['hot_news'])) {
            $news->hot_news = $arrNews['hot_news'];
        }
        $news->save();
        return true;
    }

    public static function updateHotDetail($id) {
        News::where('tieu_bieu', 1)->update(['tieu_bieu' => 0]);
        $news = News::find($id);
        $news->tieu_bieu = 1;
        $news->save();
        return true;
    }

    public static function deleteNewsById($id) {
        if (!isset($id)) {
            return false;
        }
        $find = News::find($id);
        $find->delete();
        return true;
    }

    public static function getANewsById($id) {
        if (!isset($id)) {
            return false;
        }
        $news = News::find($id);
        if ($news->exists()) {
            return $news;
        }
        return false;
    }
    public static function getAllNews() {
        $allNews = DB::table('news')
        ->join('category', 'news.category_id', '=', 'category.id')
        ->select('category.name', 'category.title as title_category', 'news.id', 'news.title', 'news.title_h1', 'news.desc', 'news.bgr', 'news.content', 'news.title1', 'news.images1', 'news.text1', 'news.title2','news.images2', 'news.text2','news.title3', 'news.images3', 'news.text3', 'news.title4', 'news.images4', 'news.text4', 'news.title5', 'news.images5', 'news.text5', 'news.hot_news', 'news.created_at')
        ->paginate(8);
        // $allNews = News::paginate(8);
        if (isset($allNews['images1'])) {
            $allNews['list_img1'] = Util::convertImgToArrayImg($allNews['images1']);
        }
        if (isset($allNews['images2'])) {
            $allNews['list_img2'] = Util::convertImgToArrayImg($allNews['images2']);
        }
        if (isset($allNews['images3'])) {
            $allNews['list_img3'] = Util::convertImgToArrayImg($allNews['images3']);
        }
        if (isset($allNews['images4'])) {
            $allNews['list_img4'] = Util::convertImgToArrayImg($allNews['images4']);
        }
        if (isset($allNews['images5'])) {
            $allNews['list_img5'] = Util::convertImgToArrayImg($allNews['images5']);
        }
        return $allNews;
    }

    public static function getAllNewsHot() {
        $allNews = DB::table('news')
        ->join('category', 'news.category_id', '=', 'category.id')
        ->select('category.name', 'category.title as title_category', 'news.id', 'news.title', 'news.title_h1', 'news.desc', 'news.bgr', 'news.content', 'news.images1', 'news.text1', 'news.images2', 'news.text2', 'news.images3', 'news.text3', 'news.images4', 'news.text4', 'news.images5', 'news.text5', 'news.hot_news', 'news.created_at')
        ->where('hot_news', 1)
        ->orderBy('created_at', 'DESC')
        ->limit(2)
        ->paginate(8);

        if (isset($allNews['images1'])) {
            $allNews['list_img1'] = Util::convertImgToArrayImg($allNews['images1']);
        }
        if (isset($allNews['images2'])) {
            $allNews['list_img2'] = Util::convertImgToArrayImg($allNews['images2']);
        }
        if (isset($allNews['images3'])) {
            $allNews['list_img3'] = Util::convertImgToArrayImg($allNews['images3']);
        }
        if (isset($allNews['images4'])) {
            $allNews['list_img4'] = Util::convertImgToArrayImg($allNews['images4']);
        }
        if (isset($allNews['images5'])) {
            $allNews['list_img5'] = Util::convertImgToArrayImg($allNews['images5']);
        }
        return $allNews;
    }
    public static function getANewsTieuBieu() {
        $allNews = DB::table('news')
        ->join('category', 'news.category_id', '=', 'category.id')
        ->select('category.name', 'category.title as title_category', 'news.id', 'news.title', 'news.title_h1', 'news.desc', 'news.bgr', 'news.content', 'news.images1', 'news.text1', 'news.images2', 'news.text2', 'news.images3', 'news.text3', 'news.images4', 'news.text4', 'news.images5', 'news.text5', 'news.hot_news', 'news.created_at')
        ->where('tieu_bieu', 1)
        ->orderBy('created_at', 'DESC')
        ->limit(1)
        ->paginate(8);
        
        if (isset($allNews['images1'])) {
            $allNews['list_img1'] = Util::convertImgToArrayImg($allNews['images1']);
        }
        if (isset($allNews['images2'])) {
            $allNews['list_img2'] = Util::convertImgToArrayImg($allNews['images2']);
        }
        if (isset($allNews['images3'])) {
            $allNews['list_img3'] = Util::convertImgToArrayImg($allNews['images3']);
        }
        if (isset($allNews['images4'])) {
            $allNews['list_img4'] = Util::convertImgToArrayImg($allNews['images4']);
        }
        if (isset($allNews['images5'])) {
            $allNews['list_img5'] = Util::convertImgToArrayImg($allNews['images5']);
        }
        return $allNews;
    }
    public static function getNewsByCategory($id_category) {
        $allNews = DB::table('news')
        ->join('category', 'news.category_id', '=', 'category.id')
        ->select('category.name', 'category.title as title_category', 'news.id', 'news.title', 'news.title_h1', 'news.desc', 'news.bgr', 'news.content', 'news.images1', 'news.text1', 'news.images2', 'news.text2', 'news.images3', 'news.text3', 'news.images4', 'news.text4', 'news.images5', 'news.text5', 'news.hot_news', 'news.created_at')
        ->where('category_id', $id_category)
        ->orderBy('created_at', 'DESC')
        ->paginate(20);
        
        if (isset($allNews['images1'])) {
            $allNews['list_img1'] = Util::convertImgToArrayImg($allNews['images1']);
        }
        if (isset($allNews['images2'])) {
            $allNews['list_img2'] = Util::convertImgToArrayImg($allNews['images2']);
        }
        if (isset($allNews['images3'])) {
            $allNews['list_img3'] = Util::convertImgToArrayImg($allNews['images3']);
        }
        if (isset($allNews['images4'])) {
            $allNews['list_img4'] = Util::convertImgToArrayImg($allNews['images4']);
        }
        if (isset($allNews['images5'])) {
            $allNews['list_img5'] = Util::convertImgToArrayImg($allNews['images5']);
        }
        return $allNews;
    }

    //Inbox
    public static function getAllInbox() {
        $arr = Inbox::orderBy('created_at', 'DESC')
                    ->paginate(16);
        return $arr;
    }

    public static function addInbox($arr) {
        $ib = new Inbox();
        if (isset($arr['fullname'])) {
            $ib->fullname = $arr['fullname'];
        }
        if (isset($arr['address'])) {
            $ib->address = $arr['address'];
        }
        if (isset($arr['phone'])) {
            $ib->phone = $arr['phone'];
        }
        if (isset($arr['email'])) {
            $ib->email = $arr['email'];
        }
        if (isset($arr['content'])) {
            $ib->content = $arr['content'];
        }
        if (isset($arr['status'])) {
            $ib->status = $arr['status'];
        }
        $ib->save();
    }

    public static function getInboxById($id) {
        if (!isset($id)) {
            return false;
        }
        $record = Inbox::find($id);
        return $record;
    }
    public static function deleteInboxById($id) {
        if (!isset($id)) {
            return false;
        }
        $record = Inbox::find($id);
        $record->delete();
        return true;
    }

    public static function updateStatusInboxById($id, $status) {
        if (!isset($id)) {
            return false;
        }
        $record = Inbox::find($id);
        $record->status = $status;
        $record->save();
    }

    public static function convertImgToArrayImg($allNews) {
        $arr = explode('|', $allNews);
        return $arr;
    }

    public static function getPathArrayImg($arrayPath){
        $stringPath = '';
        foreach ($arrayPath as $path) {
            $stringPath = $stringPath . '/images/upload/'.$path . '|';
        }
        //tru di phan tu cuoi'
        return substr("$stringPath",0, strlen($stringPath)-1);
    }

    public static function removeUnicode ($str){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        
       foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
       }
       $str = str_replace(",", "", $str);
       $str = str_replace(".", "", $str);       
       $str = str_replace(" ", "-", $str);
       $str = str_replace("?", "", $str);
       $str = strtolower($str);
	   return $str;
    }

    public static function getListImgClient($requestFile) {
        $images = array();
        $files = $requestFile;
        foreach($files as $index => $file) {
            $fileName = time().'x'.$index.$file->getClientOriginalName();
            $pathFile = public_path('/images/upload/');
            
            $file->move($pathFile, $fileName);
            $images[] = $fileName;
        }
        $fileExist = true;
        
        $stringPath = Util::getPathArrayImg($images);
        return $stringPath;
    }

    public static function getUrl($type) {
        switch($type) {
            case 'contact': 
                $url = '/danh-muc/lien-he';
                break;
        }
        return $url;
    }
    public static function deleteFile($arrPath) {
        foreach($arrPath as $item) {
            $itemValid = substr($item, 1);
            if(File::exists($itemValid)) {
                File::delete($itemValid);
            }
        }
    }
	
}
?>