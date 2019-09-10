<?php

class LinkController extends AdminController {

    private $_model;

    public function filters() {
        return array('accessControl');
    }

    // public function accessRules() {
    //     return AdminRoles::getAccessRules($this->id);
    // }

    public function init() {
        $this->_model = new Link();
        parent::init();
    }

    public function actionIndex() {
        $data = $this->_model->getLink();
        $this->render('index', array(
            'link_action' => Yii::app()->createUrl('admin/link/edit'),
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_LINK,
            'links' => $data['links'],
            'counts' => $data['counts'])
        );
    }

    public function actionEdit() {
        $id = ObjInput::get('id', 'int', 0);
        $mol = new Link();
        $data = $mol->getOne($id);
        if (!$data) {
            echo Strings::alert('Không tồn tại', Yii::app()->createUrl('admin/link'));
        }

        if (Yii::app()->request->isPostRequest) {

            $type = ObjInput::get('type', 'int', 1);
            if ($type <> "") {
                $params["type"] = $type;
            }
            $name = ObjInput::get("name", "str", "");
            if ($name <> "") {
                $params["name"] = $name;
            }
            $position = ObjInput::get('position', 'int', 1);
            if ($type <> "") {
                $params["position"] = $position;
            }
            $link = ObjInput::get("link", "str", "");
            if ($name <> "") {
                $params["link"] = $link;
            }
            $update = $mol->updateData($params, $id);
            if ($update) {
                echo Strings::alert('Bạn cập nhật thành công', Yii::app()->createUrl('admin/link'));
            } else {
                $this->_err = 'Cập nhật không thành công.';
            }
        }
        $this->render('form', array(
            'data' => $data,
            'link_home' => Yii::app()->createUrl('admin/link/'),
            'link_create' => Yii::app()->createUrl('admin/link/create/'),
            'err' => $this->_err,
        ));
    }

    public function actionDel() {
        $id = ObjInput::get('id', 'int', 0);
        if ($id <> 0) {
            $this->_model->deleteData($id);
            $this->setErrors('Xóa thành công', 'success');
            $this->redirect(Yii::app()->createUrl('admin/link'));
        } else {
            $this->setErrors('Tham số sai.');
            $this->redirect(Yii::app()->createUrl('admin/link'));
        }
    }

    public function actionCreate() {
        $Model = new Link();
        $err = '';
        $type = ObjInput::get('type', 'int', 0);
        $name = ObjInput::get('name', 'str', '');
        $position = ObjInput::get('position', 'int', 0);
        $link = ObjInput::get('link', 'str', '');
        $image = '';

        $data = array(
            'type' => $type,
            'name' => $name,
            'position' => $position,
            'link' => $link,
        );
        $data['image'] = '';
        if (Yii::app()->request->isPostRequest) {
            if ($name != '') {
                if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
                    $file = $_FILES['image'];
                    $x = '200';
                    $y = '';
                    $imageName = Strings::cut_char(Strings::remove_space(Strings::get_ascii($name)), '30') . '_' . time();
                    $images = Upload::UploadOne($file, IMG_LINK, IMG_LINK_2, IMG_W, IMG_WT, IMG_HT, $imageName);
                    $data['image'] = $images;
                }
                $id_u = $Model->insertData($data);
                if ($id_u > 0) {
                    echo Strings::alert('Thêm mới thành công', Yii::app()->createUrl('admin/link/'));
                    die();
                } else {
                    @unlink('./' . IMG_LINK . $data['image']);
                    $this->_err = 'Có lỗi trong quá trình xử lý';
                }
            } else {
                $this->_err = 'Text hiển thị không được để trống';
            }
        }
        $this->render('form', array(
            'data' => $data,
            'link_home' => Yii::app()->createUrl('admin/link/'),
            'link_create' => Yii::app()->createUrl('admin/link/create/'),
            'err' => $this->_err,
        ));
    }
}
