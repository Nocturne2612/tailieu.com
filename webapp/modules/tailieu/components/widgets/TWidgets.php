<?php
class TWidgets extends CWidget {

    //put your code here
    public $methodName;
    public $data;
    public $position;
    public $product;
    public $check;
    public static $categoryMenu = false;
    public $faceBookId = '1563895650496031';
    public $app_secret = 'f4a739343af9cfd12b21937cae236f40';

    public function init() {
        parent::init();
    }

    public function run() {
        $method_name = $this->methodName;
        $this->$method_name();
    }

    public function nav() {
        $check_login = false;
        $check_login = Yii::app()->user->getState('check_login');
        $this->render("nav", array('check_login' => $check_login));
    }

    public function menu_left() {
        $this->render("menu_left", array());
    }

    public function ads() {
        $position = $this->position;
        $this->render($position, array());
    }

    public function ex_link() {
        $this->render("ex_link", array());
    }

    public function head() {
        $data = SystemFile::readFile(DIR_CACHE . 'cache_category.cache');
        $data = json_decode($data, true);
        $arr = array('0' => 'Tất cả');
        foreach ($data["parent_category"] as $d) {
            $arr[$d['id']] = $d['title'];
        }
//        var_dump($data['sub_category']);die();
        $combox = Strings::combobox('platforms', $arr, ObjInput::get('platforms', 'int', 0), '', '');

        $check_login = false;
        $check_login = Yii::app()->user->getState('tAccount');
        
        require_once ROOT_PATH . DS . 'webapp/config/src/Facebook/autoload.php';
        $config = array(
            'app_id' => $this->faceBookId,
            'app_secret' => $this->app_secret,
            'default_graph_version' => 'v3.0',
        );
        $fb = new \Facebook\Facebook($config);
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'user_posts']; // optional
        $callback = 'https://tailieukientruc.net/tailieu/login/facebook.html';
        $loginUrl = $helper->getLoginUrl($callback, $permissions);
//        $loginUrl = '';
        $this->render("head", array('combo' => $combox, 'title' => Strings::encode(ObjInput::get('keyword', 'str', '')), 'data' => $data, 'check_login' => $check_login,'fb_login'=>$loginUrl));
//        $this->render("head", array('combo' => $combox, 'title' => Strings::encode(ObjInput::get('keyword', 'str', '')), 'data' => $data, 'check_login' => $check_login));
    }

    public function footer() {
        $model = new Link();
        $data = $model->getData();
        $this->render("ex_f_link", array('data' => $data));
    }

    public function slider_hot() {
        $model = new Product;
        $data = array();
        $data = $model->getProductsHot();
        //var_dump($data);
        $this->render("tl_hot", array('data' => $data));
    }

    public function top_countdown() {
        $model = new Product;
        $data = array();
        $data = $model->getProductTopCountdown(ObjInput::get('id', 'int', 0));
        $this->render("top_countdown", array('data' => $data));
    }

    public function topcountdown_right() {
        $model = new Download;
        $data = array();
        $data = $model->getProductTopCountdown_inWeek();
        /* if($_GET['bug']==1){
          var_dump($data);
          } */
        $this->render("topcountdown_right", array('data' => $data));
    }

    public function tabs_new() {
        $model = new Product;
        $data = array();
        $data = $model->getProductsNew2(ObjInput::get('id', 'int', 0),  $this->check);
        $this->render("tabs_new", array(
            'data' => $data,
            'check'=> $this->check,
                )
        );
    }

    public function breadcrums() {
        $data = array();
        if ($this->data['parent_id'] > 0) {
            $model = new Categorydocument;
            $data = $model->getDetailCategoryById(intval($this->data['parent_id']));
        }
        $this->render("breadcrums", array('output' => $this->data, 'data_p' => $data, 'controller' => Yii::app()->controller->id));
    }

    public function info_account() {
        $models = new Accounts;
        $data = $models->getInfoAccountRealtime();
        //$models->performInfoAccount($data);
        $this->render("info_account", array('data' => $data));
    }

    public function add_code() {

        $this->render("add_code", array());
    }

    public function productView() {
        if ($this->check) {
            $this->render("product_view", array('data' => $this->product));
        } else {
            $this->render("product_view1", array('data' => $this->product));
        }
    }

    public function CategoryMenu() {
        if (!self::$categoryMenu) {
            $data = SystemFile::readFile(DIR_CACHE . 'cache_category.cache');
            self::$categoryMenu = json_decode($data, true);
        }
        $this->render("categorymenu", array('data' => self::$categoryMenu, 'check' => $this->check));
    }

    public function newView() {
        $this->render("news_view", array('data' => $this->product));
    }
    public function searchBox() {
        $this->render("search_box", array('data' => $this->product));
    }
}
