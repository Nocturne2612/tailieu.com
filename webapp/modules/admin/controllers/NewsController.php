<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewController
 *
 * @author DUCLM
 */
class NewsController extends AdminController {

    public function filters() {
        return array('accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        $this->_arrStatus = array('0' => '-- Tất cả --', '1' => 'Hoạt động', '2' => 'Ngừng hoạt động');
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/xeon/js/datepicker.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/xeon/css/datapicker.css');
        parent::init();
    }

    public function actionIndex() {

        $Model = new News();
        $id = ObjInput::get('id', 'int', 0);
        $title = ObjInput::get('title', 'str', '');
        $parent = ObjInput::get('parent', 'str', '0');
        $status = ObjInput::get('status', 'int', 0);
        $begin_createtime = ObjInput::get('begin_createtime', 'str', '');
        $end_createtime = ObjInput::get('end_createtime', 'str', '');
        if (Yii::app()->request->isPostRequest) {
            $array_id = ObjInput::get('element', 'array', '', 'POST', 'int');
            if (is_array($array_id)) {
                $ints = 0;
                $ints = $Model->delAll($array_id);
                if ($ints > 0) {
                    echo Strings::alert('Bạn xoá thành công ' . $ints . ' mục chọn.');
                } else {
                    echo Strings::alert('Quá trình thực hiện bị lỗi vui lòng thực hiện lại.');
                }
            }
        }

        
        $param = array(
            'id' => $id,
            'title' => $title,
            'parent' => $parent,
            'status' => $status,
            'begin_createtime' => $begin_createtime,
            'end_createtime' => $end_createtime);
        $Cmod = new CategoryNews();
        $arr_status = $this->_arrStatus;
        $arr_status[0] = 'Tất cả';
        $array = $Model->getData($param);

        $data = array(
            'news' => $array['data'],
            'pageHtml' => $array['pageHtml'],
            'totalRecord' => (int) $array['totalRecord'],
            'link_action' => Yii::app()->createUrl('admin/news'),
            'link_create' => Yii::app()->createUrl('admin/news/create/'),
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_NEWS_THUMB,
            'arr_status' => $this->_arrStatus,
            'arr_statuss' => array('2' => 'Cho hoạt động', '1' => 'Ngừng hoạt động'),
            'combo_status' => Strings::combobox('status', $arr_status, $status, '', 'class="form-control"'),
            'combo_category' => $Cmod->getFullCategory_Option($parent),
            'array_category' => $Model->getDataCategory(),
            'error' => $Model->_getError(),
            'success' => $Model->_getSuccess(),
            'get_data' => $param);

        $this->render('index', $data);
    }

    public function actionEdit() {
        $title_page = 'Cập nhật tin tức';
        $this->pageTitle = $title_page;

        $id = ObjInput::get('id', 'int', 0);
        $Model = new News();

        $news = $Model->getOneNews($id);
        if (!$news) {
            $this->setErrors('Không tồn tại tin tức này');
            $this->redirect(Yii::app()->createUrl('admin/news/'));
        }
        if (isset($_GET['status'])) { // Lưu trạng thái
            $status = ObjInput::get('status', 'int', 0);
            if ($status == '2') {
                $status = 1;
            } else {
                $status = 2;
            }
            $update = $Model->updateData(array('status' => $status), $id);
            if ($update > 0) {
                $this->setErrors('Cập nhật thành công', 'success');
                $this->redirect(Yii::app()->createUrl('admin/news/'));
            } else {
                $this->setErrors('Có lỗi trong quá trình xử lý');
                $this->redirect(Yii::app()->createUrl('admin/news/'));
            }
        }

        $err = '';
        $title = ObjInput::get('title', 'str', '');

        $ascii = ObjInput::get('ascii', 'str', '');
        $subcontent = ObjInput::get('subcontent', 'def', '');
        $content = ObjInput::get('content', 'def', '');
        $status = ObjInput::get('status', 'int', 0);
        $parent = $news['sub_id'] . '|' . $news['parent_id'];
        $begin_time = SystemDateTime::to_time_begin(ObjInput::get('begin_time', 'str', date('d-m-Y')));
        $end_time = SystemDateTime::to_time_end(ObjInput::get('end_time', 'str', date('d-m-Y')));
        $priority = ObjInput::get('priority', 'int', 0);
        $feature_news = ObjInput::get('feature_news', 'int', 0);
        $news_type = ObjInput::get('news_type', 'int', '1');
        $author = ObjInput::get('author', 'str', '');
        $keyword = ObjInput::get('keyword', 'str', '');
        $parent = ObjInput::get('parent', 'str', '');
        $tag = ObjInput::get('tag', 'str', '');
        if (Yii::app()->request->isPostRequest) {
            if ($title != '') {


                $data_update = array(
                    'title' => $title,
                    'ascii' => ($ascii != '' ? $ascii : Strings::text_url($title)),
                    'subcontent' => $subcontent,
                    'content' => $content,
                    'update_time' => time(),
                    'author' => $author,
                    'status' => $status,
                    'begin_time' => $begin_time,
                    'end_time' => $end_time,
                    'priority' => $priority,
                    'feature_news' => $feature_news,
                    'news_type' => $news_type,
                    'keyword' => $keyword,
                    'tag' => $tag,
                    'position' => ObjInput::get('position', 'int', 0)
                );

                if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
                    $file = $_FILES['file'];
                    $x = '200';
                    $y = '';
                    $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii($title)), '30') . '_' . time();
                    $images = Upload::UploadOne($_FILES['file'], IMG_NEWS, IMG_NEWS_THUMB, IMG_W, IMG_WT, IMG_HT, $name);
                    $data_update['image'] = $images;
                    @unlink('./' . IMG_NEWS_THUMB . $news['image']);
                    @unlink('./' . IMG_NEWS . $news['image']);
                } else {
                    $data_update['image'] = $news['image'];
                }
                if ($parent <> '0') {

                    $arr = explode('|', $parent);
                    $data_update['sub_id'] = (int) $arr[0];
                    $data_update['parent_id'] = (int) $arr[1];
                }
                $id_u = $Model->updateData($data_update, intval($id));
                if ($id_u) {
                    echo Strings::alert('Cập nhật thành công', Yii::app()->createUrl('admin/news/'));
                    die();
                } else {
                    @unlink('./' . IMG_NEWS_THUMB . $data['image']);
                    @unlink('./' . IMG_NEWS . $data['image']);
                    $err = 'Có lỗi trong quá trình xử lý';
                }
            } else {
                $err = 'Tiêu đề không được để trống';
            }
        }

        $fck = new FCKeditor('subcontent');
        $fck->Value = $news['subcontent'];
        $fck->Height = 300;
        $fck_n = new FCKeditor('content');
        $fck_n->Value = $news['content'];
        $fck_n->Height = 500;



        $Cmod = new CategoryNews();
        $this->render('form', array(
            'data' => $news,
            'title_page' => $title_page,
            'link_news' => Yii::app()->createUrl('admin/news/'),
            'link_action' => Yii::app()->createUrl('admin/news/create/'),
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $news['status'], '', 'class="form-control"'),
            'combo_category' => $Cmod->getFullCategory_Option($news['sub_id'] . '|' . $news['parent_id']),
            'fck_tomtat' => $fck->CreateHtml(),
            'fck_noidung' => $fck_n->CreateHtml(),
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_NEWS_THUMB,
            'err' => $err,
            'json_response' => json_encode($Cmod->getKeywordNews()),
            'json_value' => $Cmod->getKeyword($news['keyword']),
        ));
    }

    public function actionCreate() {
        $title_page = 'Tạo tin tức';
        $this->pageTitle = $title_page;


        $title = ObjInput::get('title', 'str', '');
        $Model = new News();
        $images = $subcontent = $_encontent = '';
        $subcontent = ObjInput::get('subcontent', 'def', '');
        $content = ObjInput::get('content', 'def', '');
        $status = ObjInput::get('status', 'int', 1);
        $parent = ObjInput::get('parent', 'str', '');
        $begin_time = SystemDateTime::to_time_begin(ObjInput::get('begin_time', 'str', ''));
        $end_time = SystemDateTime::to_time_end(ObjInput::get('end_time', 'str', ''));
        $priority = ObjInput::get('priority', 'int', 0);
        $feature_news = ObjInput::get('feature_news', 'int', 0);
        $news_type = ObjInput::get('news_type', 'int', '1');
        $author = ObjInput::get('author', 'str', '');
        $keyword = ObjInput::get('keyword', 'str', '');
        $tag = ObjInput::get('tag', 'str', '');
        $ascii = ObjInput::get('ascii', 'str', '');

        $data = array(
            'title' => $title,
            'subcontent' => $subcontent,
            'content' => $content,
            'update_time' => time(),
            'create_time' => time(),
            'status' => $status,
            'begin_time' => $begin_time,
            'end_time' => $end_time,
            'priority' => $priority,
            'feature_news' => $feature_news,
            'news_type' => $news_type,
            'author' => $author,
            'keyword' => $keyword,
            'tag' => $tag,
            'position' => ObjInput::get('position', 'int', 0),
            'ascii' => ($ascii != '' ? $ascii : Strings::text_url($title)),
        );
        $data['image'] = '';
        if ($parent <> '') {
            $arr = explode('|', $parent);
            $data['sub_id'] = (int) $arr[0];
            $data['parent_id'] = (int) $arr[1];
        }
         if ($parent <> '0') {
                $arr = explode('|', $parent);
                if (count($arr) > 1) {
                    $data['sub_id'] = (int) $arr[0];
                    $data['parent_id'] = (int) $arr[1];
                } else
                    $data['parent_id'] = (int) $arr[0];
            }
        
        if (Yii::app()->request->isPostRequest) {
            if ($title != '') {
                if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
                    $file = $_FILES['file'];
                    $x = '200';
                    $y = '';
                    $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii($title)), '30') . '_' . time();
                    $images = Upload::UploadOne($_FILES['file'], IMG_NEWS, IMG_NEWS_THUMB, IMG_W, IMG_WT, IMG_HT, $name);
                    $data['image'] = $images;
                }
                $id_u = $Model->insertData($data);
                if ($id_u > 0) {
                    $this->setErrors('Thêm mới thành công', 'success');
                    $this->redirect(Yii::app()->createUrl('admin/news/'));
                    die();
                } else {
                    @unlink('./' . IMG_NEWS_THUMB . $data['image']);
                    @unlink('./' . IMG_NEWS . $data['image']);
                    $this->_err = 'Có lỗi trong quá trình xử lý';
                }
            } else {
                $this->_err = 'Tiêu đề không được để trống';
            }
        }
        $Cmod = new CategoryNews();

        $fck = new FCKeditor('subcontent');
        $fck->Value = $subcontent;
        $fck->Height = 300;


        $fck_n = new FCKeditor('content');
        $fck_n->Value = $content;
        $fck_n->Height = 500;


        //var_dump(json_encode($Cmod->getKeywordNews()));
        $this->render('form', array(
            'data' => $data,
            'title_page' => $title_page,
            'link_news' => Yii::app()->createUrl('admin/news/'),
            'link_action' => Yii::app()->createUrl('admin/news/create/'),
            'fck_tomtat' => $fck->CreateHtml(),
            'fck_noidung' => $fck_n->CreateHtml(),
            'combo_category' => $Cmod->getFullCategory_Option($parent),
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $status, '', 'class="form-control"'),
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_NEWS_THUMB,
            'json_response' => json_encode($Cmod->getKeywordNews()),
            'json_value' => '', //{"name":"thời trang","id":"1"}
            'err' => $this->_err,
        ));
    }

    public function actionDel() {
        $id = ObjInput::get('id', 'int', 0);
        if ($id <> 0) {
            News::deleteData($id);
        } else {
            echo Strings::alert('Lỗi không thực hiện được', Yii::app()->createUrl('admin/news/'));
        }
    }

}
