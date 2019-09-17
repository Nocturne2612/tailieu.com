<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class CategoryController extends AdminController {

    private $_modes;

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        $this->_modes = new Category();
        parent::init();
    }

    public function actionIndex() {
        $param = array(
            'id' => ObjInput::get('id', 'int', 0),
            'title' => ObjInput::get('title', 'str', ''),
            'category_type' => ObjInput::get('category_type', 'int', 0),
            'status' => ObjInput::get('status', 'int', 0),
        );

        $get_data = $this->_modes->getData($param, 'category_type,stt ASC');
        $arr_statuss = array('0' => 'Cho hoạt động', '1' => 'Ngừng hoạt động');
        $arr_status = $this->_arrStatus;
        $get_data_tr = $this->_modes->getCategory($get_data, 0, '--', $arr_status, $arr_statuss);
        if (ObjInput::get('cache', 'int', 0) == '1') {
            $this->MakeCaches();
            $this->redirect(Yii::app()->createUrl('admin/category'));
        }
        $data = array(
            'output' => $get_data,
            'totalRecord' => count($get_data),
            'link_action' => Yii::app()->createUrl('admin/category'),
            'error' => $this->_modes->_getError(),
            'success' => $this->_modes->_getSuccess(),
            'arr_statuss' => $arr_statuss,
            'arr_status' => $arr_status,
            'arr_ctype' => $GLOBALS['CATEGORY_TYPE'],
            'get_data' => $param,
            'output_tr' => $get_data_tr
        );
        $this->render('index', $data);
    }

    public function actionView() {
        $title_page = 'Cập nhật danh mục';
        $id = ObjInput::get('id', 'int', 0);
        $data = $this->_modes->getDataById($id);
        if (!$data) {
            $this->setErrors('Không tồn tại hoặc đã bị xóa.');
            $this->redirect(Yii::app()->createUrl('admin/category/'));
        }

        $this->render('form', array(
            'data' => $data,
            'error' => $this->_modes->_getError(),
            'success' => $this->_modes->_getSuccess(),
            'link_back' => Yii::app()->createUrl('admin/category'),
            'link_action' => Yii::app()->createUrl('admin/category/edit/', array('id' => $id)),
            'title_page' => $title_page,
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $data['status'], '', 'class="form-control"'),
            'combo_parent' => $this->_modes->getCategoryOption($this->_modes->getData(array('status' => 1), 'category_type,stt ASC'), 0, '--', $data['parent_id']),
            'combo_ctype' => Strings::combobox('category_type', $GLOBALS['CATEGORY_TYPE'], $data['category_type'], '', 'class="form-control"'),
            'arr_status' => $this->_arrStatus,
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_NEWS_THUMB,
        ));
    }

    public function actionEdit() {
        $id = ObjInput::get('id', 'int', 0);
        if (isset($_GET['status'])) { // Lưu trạng thái
            $status = ObjInput::get('status', 'int', 0);
            if ($status == '0') {
                $status = 1;
            } else {
                $status = 0;
            }
            $update = $this->_modes->updateData(array('status' => $status), "id='" . $id . "'");
            if ($update > 0) {
                $this->MakeCaches();
                $this->setErrors('Cập nhật thành công', 'success');
                $this->redirect(Yii::app()->createUrl('admin/category/'));
            } else {
                $this->setErrors('Có lỗi trong quá trình xử lý');
                $this->redirect(Yii::app()->createUrl('admin/category/'));
            }
        }
        /** Xóa Ảnh * */
        if (isset($_GET['image']) && $_GET['image'] <> '') {
            $this->_delImgae($id);
        }
        if (Yii::app()->request->isPostRequest) {
            $this->_modes->attributes = $_POST;
            if (Yii::app()->request->isPostRequest && $this->_modes->validate()) {
                $exits = $this->_modes->getDataById($id);
                if (!$exits) {
                    $this->setErrors('Không tồn tại hoặc đã bị xóa.');
                    $this->redirect(Yii::app()->createUrl('admin/category/'));
                }

                $data = array(
                    'title' => ObjInput::get('title', 'str', ''),
                    'link' => ObjInput::get('link', 'str', ''),
                    'color' => ObjInput::get('color', 'str', ''),
                    'stt' => ObjInput::get('stt', 'int', 0),
                    'parent_id' => ObjInput::get('parent_id', 'int', 0),
                    'status' => ObjInput::get('status', 'int', 0),
                    'category_type' => ObjInput::get('category_type', 'int', 0),
                );
                if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
                    $file = $_FILES['file'];

                    $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii(ObjInput::get('title', 'str', ''))), '30') . '_' . time();
                    $images = Upload::UploadOne($_FILES['file'], IMG_NEWS, IMG_NEWS_THUMB, 32, 20, 20, $name);
                    $data['icon'] = $images;
                    @unlink('./' . IMG_NEWS_THUMB . $exits['icon']);
                    @unlink('./' . IMG_NEWS . $exits['icon']);
                } else {
                    $data['icon'] = $exits['icon'];
                }
                if ($id == $data['parent_id']) {
                    $this->setErrors('Danh mục bạn cập nhật không thể là danh mục con của chính nó.');
                    $this->redirect(Yii::app()->createUrl('admin/category/view/', array('id' => $id)));
                }
                $update = $this->_modes->updateData($data, 'id=' . $id);
                if ($update) {
                    $this->MakeCaches();
                    $this->setErrors('Cập nhật thành công.', 'success');
                    $this->redirect(Yii::app()->createUrl('admin/category/'));
                } else {
                    $this->setErrors('Có lỗi quá trình cấp nhật.');
                    $this->redirect(Yii::app()->createUrl('admin/category/view/', array('id' => $id)));
                }
            } else {
                $this->setErrors($this->_modes->getErrorForm());
                $this->redirect(Yii::app()->createUrl('admin/category/view/', array('id' => $id)));
            }
        }
    }

    public function actionCreate() {
        $title_page = 'Thêm danh mục';
        $this->pageTitle = $title_page;
        $title = ObjInput::get('title', 'str', '');
        $stt = ObjInput::get('stt', 'int', 0);
        $status = ObjInput::get('status', 'int', 0);
        $data = array(
            'title' => $title,
            'link' => ObjInput::get('link', 'str', ''),
            'color' => ObjInput::get('color', 'str', ''),
            'stt' => $stt,
            'status' => $status,
            'category_type' => ObjInput::get('category_type', 'int', 0),
            'link' => ObjInput::get('link', 'str', ''),
            'parent_id' => ObjInput::get('parent_id', 'int', 0),
            'create_time' => time(),
        );


        $this->_modes->attributes = $_POST;
        if (Yii::app()->request->isPostRequest && $this->_modes->validate()) {
            if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
                $file = $_FILES['file'];
                $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii($title)), '30') . '_' . time();
                $images = Upload::UploadOne($_FILES['file'], IMG_NEWS, IMG_NEWS_THUMB, '32', '20', '20', $name);
                $data['icon'] = $images;
            }
            $ins = $this->_modes->insertData($data);
            if ($ins > 0) {
                $this->MakeCaches();
                $this->setErrors('Thêm mới thành công', 'success');
                $this->redirect(Yii::app()->createUrl('admin/category'));
            } else {
                $this->setErrors('Có lỗi trong quá trình xử lý');
            }
        } else {
            $this->setErrors($this->_modes->getErrorForm());
        }

        $this->render('form', array(
            'data' => $data,
            'error' => $this->_modes->_getError(),
            'success' => $this->_modes->_getSuccess(),
            'link_back' => Yii::app()->createUrl('admin/category'),
            'link_action' => Yii::app()->createUrl('admin/category/create'),
            'title_page' => $title_page,
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $data['status'], '', 'class="form-control"'),
            'combo_parent' => $this->_modes->getCategoryOption($this->_modes->getData(array(), 'category_type,stt ASC'), 0, '--', $data['parent_id']),
            'combo_ctype' => Strings::combobox('category_type', $GLOBALS['CATEGORY_TYPE'], $data['category_type'], '', 'class="form-control"'),
            'arr_status' => $this->_arrStatus
        ));
    }

    public function actionDel() {
        $id = ObjInput::get('id', 'int', 0);
        if ($id <> 0) {
            $this->_modes->deleteData($id);
            $this->setErrors('Xóa thành công', 'success');
            $this->MakeCaches();
            $this->redirect(Yii::app()->createUrl('admin/category'));
        } else {
            $this->setErrors('Tham số sai.');
            $this->redirect(Yii::app()->createUrl('admin/category'));
        }
    }

    private function _delImgae($id) {
        $image = ObjInput::get('image', 'str', '');
        $id = ObjInput::get('id', 'int', 0);
        if ($image != '') {
            $image_replace = base64_decode($image);
            $u = $this->_modes->updateData(array('icon' => ''), 'id='.$id);
            if ($u > 0) {
                $this->setErrors('Cập nhật thành công', 'success');
                @unlink('./' . IMG_NEWS . $image_replace);
                @unlink('./' . IMG_NEWS_THUMB . $image_replace);
                 $this->MakeCaches();
                $this->redirect(Yii::app()->createUrl('admin/category/view', array('id' => $id)));
            } else {
                $this->setErrors('Có lỗi trong quá trình xử lý');
                $this->redirect(Yii::app()->createUrl('admin/category/view', array('id' => $id)));
            }
        }
    }

    public function MakeCaches() {

        $get_data = $this->_modes->getData(array('status' => 1, 'category_type' => 1), 'category_type,stt ASC');
        $li_left = $li_right = '';
        foreach ($get_data as $v) {
            $arr_p[$v['parent_id']][] = $v;
        }
        foreach ($arr_p[0] as $k => $d) {

            if (!isset($arr_p[$d['id']])) {
                $li_left .= '<li style="' . ($d['color'] != '' ? 'background:' . $d['color'] : '#FFF') . '"><a href="' . $d['link'] . '" title="' . $d['title'] . '" style="' . ($d['color'] != '' ? 'color:#FFF' : '#000') . '">' . ($d['icon'] <> '' ? '<img src="' . ROOT_URL . '/' . IMG_NEWS_THUMB . $d['icon'] . '">' : '') . '
<span>' . $d['title'] . '</span></a></li>';
            } else {

                $ul = '<ul class="dropdown-menu">';
                foreach ($arr_p[$d['id']] as $k => $v1) {
                    $ul .= '<li style="' . ($v1['color'] != '' ? 'background:' . $v1['color'] : 'background:#FFF') . '"><a href="' . $v1['link'] . '" title="' . $v1['title'] . '" style="' . ($v1['color'] != '' ? 'color:#FFF' : '#000') . '">' . ($v1['icon'] <> '' ? '<img src="' . ROOT_URL . '/' . IMG_NEWS_THUMB . $v1['icon'] . '">' : '') . '
<span>' . $v1['title'] . '</span></a></li>';
                }
                $ul .='</ul>';
                $li_left .= '<li class="dropdown" style="' . ($d['color'] != '' ? 'background:' . $d['color'] : 'background:#FFF') . '"><a href="' . $d['link'] . '" title="' . $d['title'] . '" style="' . ($d['color'] != '' ? 'color:#FFF' : 'color:#000') . '" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . ($d['icon'] <> '' ? '<img src="' . ROOT_URL . '/' . IMG_NEWS_THUMB . $d['icon'] . '">' : '') . '
<span>' . $d['title'] . '</span><span class="caret"></span></a>' . $ul . '</li>';
            }
        }
        $li_right = ' {if !$check_login}<li style="background:#faa61a" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="' . SystemBase::buildUrl('tailieu/register', array()) . '">Tài khoản<span class="caret"></span></a>
<ul class="dropdown-menu"><li><a href="' . SystemBase::buildUrl('tailieu/register', array()) . '">Đăng kí</a></li><li><a href="' . SystemBase::buildUrl('tailieu/login', array()) . '">Đăng nhập</a><a href="http://tailieukientruc.net/tin-tuc/tro-giup-5.html">Hướng dẫn</a></li></ul>            
</li>
            
            {else}
                    <li class="dropdown" style="background:#ed1c24">
                        <a href="' . SystemBase::buildUrl('tailieu/account', array()) . '" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="' . SystemBase::buildUrl('tailieu/account/', array()) . '">Thông tin tài khoản</a></li>
                            <li><a href="' . SystemBase::buildUrl('tailieu/account/changeinfo', array()) . '">Cập nhật tài khoản</a></li>    
                            <li><a href="' . SystemBase::buildUrl('tailieu/account/changepass', array()) . '">Đổi mật khẩu</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="' . SystemBase::buildUrl('tailieu/account/logout', array()) . '">Đăng xuất</a></li>
                        </ul>
                    </li>{/if}';
        $cache_nav = '
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            ' . $li_left . '
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            ' . $li_right . '
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>';


        $file_path = Yii::getPathOfAlias("webroot") . "/webapp/modules/tailieu/components/widgets/views/";
        // $this->makeCache('menu_left.tpl', $file_path, $li_mleft);
        $this->makeCache('nav.tpl', $file_path, $cache_nav);
    }

}
