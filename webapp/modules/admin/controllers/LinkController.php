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

    public function actionView() {
        $id = ObjInput::get('id', 'int', 0);
        $mol = new Link();
        $data = $mol->getOne($id);
        if (!$data) {
            echo Strings::alert('Không tồn tại', Yii::app()->createUrl('admin/link'));
        }
        $this->render('form', array(
            'data' => $data,
            'link_home' => Yii::app()->createUrl('admin/link/'),
            'link_create' => Yii::app()->createUrl('admin/link/create/'),
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_LINK,
            'link_action' => Yii::app()->createUrl('admin/link/edit/', array('id' => $id)),
            'err' => $this->_err,
        ));
    }

    public function actionEdit() {
        $id = ObjInput::get('id', 'int', 0);
        /** Xóa Ảnh * */
        if (isset($_GET['image']) && $_GET['image'] <> '') {
            $this->_delImgae($id);
        }
        if (Yii::app()->request->isPostRequest) {
            $this->_model->attributes = $_POST;
            if ($this->_model->validate()) {
                $exits = $this->_model->getDataById($id);
                if (!$exits) {
                    $this->setErrors('Không tồn tại hoặc đã bị xóa.');
                    $this->redirect(Yii::app()->createUrl('admin/link/'));
                }

                $data = array(
                    'type' => ObjInput::get('type', 'int', 0),
                    'name' => ObjInput::get('name', 'str', ''),
                    'position' => ObjInput::get('position', 'int', 0),
                    'link' => ObjInput::get('link', 'str', ''),
                );
                if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
                    $file = $_FILES['image'];
                    $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii(ObjInput::get('title', 'str', ''))), '30') . '_' . time();
                    // $images = Upload::UploadOne($file, IMG_LINK, IMG_LINK2, 32, 20, 20, $name);
                    $images = Upload::UploadOne($file, IMG_LINK, IMG_LINK_2, IMG_W, IMG_WT, IMG_HT, $name);
                    $data['image'] = $images;
                    @unlink('./' . IMG_LINK_2 . $exits['image']);
                    @unlink('./' . IMG_LINK . $exits['image']);
                } else {
                    $data['image'] = $exits['image'];
                }
                $update = $this->_model->updateData($data, 'id=' . $id);
                if ($update) {
                    $this->setErrors('Cập nhật thành công.', 'success');
                    $this->redirect(Yii::app()->createUrl('admin/link/'));
                } else {
                    $this->setErrors('Có lỗi quá trình cấp nhật.');
                    $this->redirect(Yii::app()->createUrl('admin/link/view/', array('id' => $id)));
                }
            } else {
                $this->setErrors($this->_model->getErrorForm());
                $this->redirect(Yii::app()->createUrl('admin/link/view/', array('id' => $id)));
            }
        }
    }

    private function _delImgae($id) {
        $image = ObjInput::get('image', 'str', '');
        $id = ObjInput::get('id', 'int', 0);
        if ($image != '') {
            $image_replace = base64_decode($image);
            $u = $this->_model->updateData(array('image' => ''), 'id='.$id);
            if ($u > 0) {
                $this->setErrors('Cập nhật thành công', 'success');
                @unlink('./' . IMG_LINK . $image_replace);
                @unlink('./' . IMG_LINK_2 . $image_replace);
                $this->redirect(Yii::app()->createUrl('admin/link/view', array('id' => $id)));
            } else {
                $this->setErrors('Có lỗi trong quá trình xử lý');
                $this->redirect(Yii::app()->createUrl('admin/link/view', array('id' => $id)));
            }
        }
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
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_LINK,
            'link_action' => Yii::app()->createUrl('admin/link/create'),
            'err' => $this->_err,
        ));
    }
}
