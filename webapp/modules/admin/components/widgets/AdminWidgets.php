<?php

/**
 * Description of AdminWidgets
 *
 * @author DUCLM
 */
class AdminWidgets extends CWidget {

    //put your code here
    public $methodName;
    private $data_menu;

    public function init() {
        $this->data_menu = array(
            '|default|useradmin' => array(
                'id' => '1',
                'icon' => 'linecons-cog',
                'title' => 'Hệ thống',
                'link' => 'system/index',
                'parent_id' => '0',
                'visible' => 1,
                'childs' => array(
                    'permission' => array(
                        'title' => 'Danh sách quyền',
                        'link' => Yii::app()->baseUrl . DS . 'admin/permission',
                        'parent_id' => '1',
                    ),
                    'useradmin' => array(
                        'title' => 'Tài khoản quản trị',
                        'link' => Yii::app()->baseUrl . DS . 'admin/useradmin',
                        'parent_id' => '1',
                    ),
                    'link' => array(
                        'title' => 'Link top/footer',
                        'link' => Yii::app()->baseUrl . DS . 'admin/link',
                        'parent_id' => '1',
                    ),
                    'setup' => array(
                        'title' => 'Cấu hình hệ thống',
                        'link' => Yii::app()->baseUrl . DS . 'admin/setup',
                        'parent_id' => '1',
                    ),
                ),
            ),
            '|account' => array(
                'id' => '2',
                'title' => 'Khách hàng',
                'link' => 'account/index',
                'icon' => 'linecons-star',
                'parent_id' => '0',
                'visible' => 1,
                'childs' => array(
                    '1' => array(
                        'title' => 'Danh sách tài khoản',
                        'link' => Yii::app()->baseUrl . DS . 'admin/account',
                        'parent_id' => '2',
                    ),
                    '2' => array(
                        'title' => 'Danh sách download',
                        'link' => Yii::app()->baseUrl . DS . 'admin/orders',
                        'parent_id' => '2',
                    ),
                    '3' => array(
                        'title' => 'Lịch sử Point',
                        'link' => Yii::app()->baseUrl . DS . 'admin/point',
                        'parent_id' => '2',
                    ),
                ),
            ),
            '3' => array(
                'id' => '3',
                'title' => 'Tin tức',
                'link' => 'news/index',
                'icon' => 'linecons-database',
                'parent_id' => '0',
                'visible' => 1,
                'childs' => array(
                    '1' => array(
                        'title' => 'Danh mục tin tức',
                        'link' => Yii::app()->baseUrl . DS . 'admin/categorynews',
                        'parent_id' => '3',
                    ),
                    '2' => array(
                        'title' => 'Danh sách tin tức',
                        'link' => Yii::app()->baseUrl . DS . 'admin/news',
                        'parent_id' => '3',
                    ),
                ),
            ),
            '4' => array(
                'id' => '4',
                'title' => 'Tài liệu',
                'link' => '',
                'icon' => 'linecons-globe',
                'parent_id' => '0',
                'visible' => 1,
                'childs' => array(
                    '1' => array(
                        'title' => 'Danh mục tài liệu',
                        'link' => Yii::app()->baseUrl . DS . 'admin/categoryproducts',
                        'parent_id' => '4',
                    ),
                    '2' => array(
                        'title' => 'Danh sách tài liệu',
                        'link' => Yii::app()->baseUrl . DS . 'admin/products',
                        'parent_id' => '4',
                    ),
                /*  '3' => array(
                  'title' => 'Nhóm thuộc tính tài liệu',
                  'link' => Yii::app()->baseUrl . DS . 'admin/categoryattribute',
                  'parent_id' => '4',
                  ),
                  '4' => array(
                  'title' => 'Thuộc tính tài liệu',
                  'link' => Yii::app()->baseUrl . DS . 'admin/attribute',
                  'parent_id' => '4',
                  ), */
                ),
            ),
            '5' => array(
                'id' => '6',
                'title' => 'Media',
                'icon' => 'linecons-desktop',
                'link' => Yii::app()->baseUrl . DS . 'admin/games/index',
                'parent_id' => '0',
                'visible' => 1,
                'childs' => array(
                    '4' => array(
                        'title' => 'Quản trị danh mục',
                        'link' => Yii::app()->baseUrl . DS . 'admin/category',
                        'parent_id' => '5',
                    ),
                    '5' => array(
                        'title' => 'Banner, ads',
                        'link' => Yii::app()->baseUrl . DS . 'admin/ads',
                        'parent_id' => '5',
                    )

                /*  '3' => array(
                  'title' => 'Video',
                  'link' => Yii::app()->baseUrl . DS . 'admin/video',
                  'parent_id' => '5',
                  ), */
                ),
            ),
//            '8' => array(
//                'id' => '8',
//                'title' => 'Đăng xuất',
//                'icon' => 'linecons-beaker',
//                'link' => Yii::app()->baseUrl . DS . 'admin/account/logout',
//                'parent_id' => '0',
//                'visible' => !Yii::app()->user->isGuest,
//                'childs' => array(
//                ),
//            ),
//            '7' => array(
//                'id' => '7',
//                'title' => 'Đối tác',
//                'icon' => 'linecons-beaker',
//                'link' => Yii::app()->baseUrl . DS . 'admin/partners',
//                'parent_id' => '0',
//                'visible' => !Yii::app()->user->isGuest,
//                'childs' => array(
//                    '1' => array(
//                        'title' => 'Danh sách đối tác',
//                        'link' => Yii::app()->baseUrl . DS . 'admin/partners',
//                        'parent_id' => '7',
//                    ),
//                )
//            ),
        );

        parent::init();
    }

    public function run() {
        $method_name = $this->methodName;
        $this->$method_name();
    }

    public function admin_menu() {
  		$count = 0;
		$data = Products::countNewProducts();
        if ($data)
            $count = $data['count'];
		if (Session::checkExists('info_user')) {
            $info = Session::get('info_user');
        }
      
       	

        $this->render("admin_menu", array('menu' => $this->data_menu,
            'controller' => Yii::app()->controller->id,
            'link_home' => Yii::app()->createUrl('admin'),
			'count'=>$count,
			'info' => $info
			));
    }

    public function admin_footer() {
        $this->render("admin_footer", array());
    }

    public function admin_header() {
        $data = array(
            'user' => '',
            'url_home' => Yii::app()->createUrl('admin'),
            'url_logout' => Yii::app()->createUrl('administrator/users/logout'),
            'images_path' => Yii::app()->baseUrl . DS . 'images/',
                //'link_user_change_pass'=>'', 
        );
        $this->render("admin_header", $data);
    }

    public function admin_slider() {

        $this->render("admin_slider", array(
            'menu' => $this->data_menu,
            'controller' => Yii::app()->controller->id,
            'link_home' => Yii::app()->createUrl('admin'),
                )
        );
    }

    public function admin_user_drop() {
        if (Session::checkExists('info_user')) {
            $info = Session::get('info_user');
        }
        $count = 0;
        $data = Products::countNewProducts();
        if ($data)
            $count = $data['count'];

        $this->render('admin_user_drop', array('info' => $info,'count'=>$count));
    }

}
