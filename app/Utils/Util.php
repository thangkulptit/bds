<?php
use Model\Category;
use Model\News;
use Model\Inbox;

class Util {
    protected $util;
    public function __contructor(Util $util) {
        $this->util = $util;
    }

    //category
    public static function getCategory() {
        return Category::get()->paginate(8);
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
    


    public static function getPathArrayImg($arrayPath){
        $stringPath = '';
        foreach ($arrayPath as $path) {
            $stringPath = $stringPath . '/images/account/'.$path . '|';
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
	
?>
}