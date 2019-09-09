<?php

/**
 * Description of CategorynewsController
 *
 * @author DUCLM
 */
class CategoryNewsController extends AdminController {

    public function filters() {
        return array('accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        parent::init();
    }

    public function actionIndex() {

        $arrCategory = false;
        $Model = new CategoryNews();
        $arrCategory = $Model->getCategory();
        $data = array(
            'link_action' => Yii::app()->createUrl('admin/categorynews'),
            'link_create' => Yii::app()->createUrl('admin/categorynews/create/'),
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_NEWS_THUMB,
            'arr_status' => $this->_arrStatus,
            'category' => $arrCategory,
            'arr_statuss' => array('0' => 'Cho hoạt động', '1' => 'Ngừng hoạt động'),
        );

        $this->render('index', $data);
    }

    public function actionEdit() {
        $id = ObjInput::get('id', 'int', 0);
        $Model = new CategoryNews();
        if (isset($_POST['save']) && $_POST['save'] <> '') { // Lưu STT
            $arr_stt = ObjInput::get('stt', 'array', '');
            $arr_ids = ObjInput::get('ids', 'array', '');
            $Model->updateStt($arr_stt, $arr_ids);
            echo Strings::alert('Cập nhật thành công', Yii::app()->createUrl('admin/categorynews'));
            die();
        } else if (isset($_GET['status'])) { // Lưu trạng thái
            $status = ObjInput::get('status', 'int', 0);
            if ($status == '0') {
                $status = 1;
            } else {
                $status = 0;
            }
            $update = $Model->updateData(array('status' => $status), $id);
            if ($update > 0) {
                echo Strings::alert('Cập nhật thành công', Yii::app()->createUrl('admin/categorynews/'));
                die();
            }
        } else {
            $item = $Model->getOne($id);
            if (!$item) {
                echo Strings::alert('Không tồn tại tin tức này', Yii::app()->createUrl('admin/categorynews/'));
                die();
            }
            $data = array(
                'title' => $item['title'],
                'tag' => $item['tag'],
                'title_en' => $item['title_en'],
                'acsii' => $item['acsii'],
                'stt' => $item['stt'],
                'status' => $item['status'],
                'category_type' => $item['category_type'],
                'parent_id' => $item['parent_id']);

            if (Yii::app()->request->isPostRequest) {
                $title = ObjInput::get('title', 'str', '');
                $title_en = ObjInput::get('title_en', 'str', '');
                $category_type = ObjInput::get('category_type', 'int', '0');
                $status = ObjInput::get('status', 'int', 0);
                $parent_id = ObjInput::get('parent_id', 'int', 0);
                $acsii = ObjInput::get('acsii', 'str', '');
                $stt = ObjInput::get('stt', 'int', 1);

                if ($title != '' && $parent_id !== $id) {
                    $data = array(
                        'title' => $title,
                        'title_en' => $title_en,
                        'acsii' => $acsii,
                        'stt' => $stt,
                        'create_time' => time(),
                        'status' => $status,
                        'category_type' => $category_type,
                        'parent_id' => $parent_id);
                    $id_u = $Model->updateData($data, $id);
                    if ($id_u > 0) {
                        echo Strings::alert('Cập nhật thành công', Yii::app()->createUrl('admin/categorynews/'));
                        die();
                    } else {
                        $this->_err = 'Có lỗi trong quá trình xử lý';
                    }
                } elseif ($parent_id === $id) {
                    $this->_err = 'Danh mục cha không thể là con của chính nó';
                } else {
                    $this->_err = 'Tiêu đề không được để trống';
                }
            }

            $this->render('form', array(
                'data' => $data,
                'link_home' => Yii::app()->createUrl('admin/categorynews/'),
                'link_create' => Yii::app()->createUrl('admin/categorynews/create/'),
                'combo_parent' => $Model->getParentCategory_Option($item['parent_id']),
                'err' => $this->_err,
                'combo_status' => Strings::combobox('status', $this->_arrStatus, $item['status'], '', 'class="form-control"')
            ));
        }
    }

    public function actionCreate() {

        $Model = new CategoryNews();
        $err = '';
        $title = ObjInput::get('title', 'str', '');
        $tag = ObjInput::get('tag', 'str', '');
        // $title_en = ObjInput::get('title_en', 'str', '');
        //  $category_type = ObjInput::get('category_type', 'int', '0');
        $status = ObjInput::get('status', 'int', 1);
        $parent_id = ObjInput::get('parent_id', 'int', 0);
        $acsii = ObjInput::get('acsii', 'str', Strings::text_url($title));
        $stt = ObjInput::get('stt', 'int', 0);

        $data = array(
            'title' => $title,
            'tag' => $tag,
            'acsii' => $acsii,
            'stt' => $stt,
            'create_time' => time(),
            'status' => $status,
            //  'category_type' => $category_type,
            'parent_id' => $parent_id);

        if (Yii::app()->request->isPostRequest) {
            if ($title != '') {
                $id_u = $Model->insertData($data);
                if ($id_u > 0) {
                    echo Strings::alert('Thêm mới thành công', Yii::app()->createUrl('admin/categorynews/'));
                    die();
                } else {
                    $this->_err = 'Có lỗi trong quá trình xử lý';
                }
            } else {
                $this->_err = 'Tiêu đề không được để trống';
            }
        }
        $this->render('form', array(
            'data' => $data,
            'link_home' => Yii::app()->createUrl('admin/categorynews/'),
            'link_create' => Yii::app()->createUrl('admin/categorynews/create/'),
            'combo_parent' => $Model->getParentCategory_Option($parent_id),
            'err' => $this->_err,
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $status, '', 'class="form-control"')
        ));
    }

    public function actionDel() {
        $id = ObjInput::get('id', 'int', 0);
        if ($id <> 0) {
            CategoryNews::deleteData($id);
        } else
            echo Strings::alert('Lỗi không thực hiện được', Yii::app()->createUrl('admin/categorynews/'));

        die();
    }

}
