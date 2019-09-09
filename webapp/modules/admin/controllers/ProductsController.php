<?php

/**
 * Description of ProductsController
 *
 * @author DUCLM
 */
class ProductsController extends AdminController {

    private $_model;
    private $_type;

    public function filters() {
        return array('accessControl'); // perform access control for CRUD operations
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        // error_reporting(E_ALL);
        // ini_set("display_startup_errors", "1");
        // ini_set("display_errors", "1");
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl .
                '/assets/xeon/js/datepicker.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl .
                '/assets/xeon/css/datapicker.css');

        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl .
                '/assets/xeon/js/multiple-select.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl .
                '/assets/xeon/css/multiple-select.css');

        $this->_model = new Products();
        $this->_type = array(
            '0' => '-- Tất cả --',
            '1' => 'Tài liệu MỚI',
            '2' => 'Tài liệu HOT',
            '3' => 'Tài liệu KHUYẾN MÃI');
        parent::init();
    }

    public function actionIndex() {
//        $result = DataHelper::selectAll('products', "id,account_name", " account_id = 0");
//        
//        if($result) {
//            $info = Session::get('info_user');
//            foreach ($result as $key => $value) {
//                $input = array(
//                    'account_name' => $info['id'],
//                );
//                DataHelper::update('products', $input, '`id` = ' . (int) $value['id']);
//            }
//        }
//        die();
        ///////////
        if (Yii::app()->request->isPostRequest) {
            $array_id = ObjInput::get('element', 'array', '', 'POST', 'int');
            if (is_array($array_id)) {
                $ints = 0;
                $ints = $this->_model->delAll($array_id);
                if ($ints > 0) {
                    $this->setErrors('Bạn xoá thành công', 'success');
                } else {
                    $this->setErrors('Quá trình thực hiện bị lỗi vui lòng thực hiện lại.');
                }
            }
        }
        $Cmod = new CategoryProducts();

        $this->_arrStatus = array('0' => '-- Tất cả --', '1' => 'Hoạt động', '2' => 'Ngừng hoạt động');
        $param = array(
            'title' => ObjInput::get('title', 'str', ''),
            'begin_createtime' => ObjInput::get('begin_createtime', 'str', ''),
            'end_createtime' => ObjInput::get('end_createtime', 'str', ''),
            'parent' => ObjInput::get('parent', 'str', '0'),
            'status' => ObjInput::get('status', 'int', '0'),
            'p_id' => ObjInput::get('p_id', 'str', ''),
            'type' => ObjInput::get('type', 'int', '0'),
            'account_id' => ObjInput::get('account_id', 'str', ''),
            'account_name' => ObjInput::get('account_name', 'str', ''),
        );

        $arr_category = $this->_model->getDataCategory();
        $array = $this->_model->getData($param);

        $data = array(
            'data_ouput' => $array['data'],
            'pageHtml' => $array['pageHtml'],
            'totalRecord' => (int) $array['totalRecord'],
            'link_action' => Yii::app()->createUrl('admin/Products'),
            'error' => $this->_model->_getError(),
            'success' => $this->_model->_getSuccess(),
            'get_data' => $param,
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_PRODUCT_THUMB,
            'arr_status' => $this->_arrStatus,
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $param['status'], '', 'class="form-control"'),
            'combo_types' => Strings::combobox('type', $this->_type, $param['type'], '', 'class="form-control"'),
            'combo_category' => $Cmod->getFullCategory_Option($param['parent']),
            'array_category' => $arr_category,
            'type' => $this->_type,
            'arr_statuss' => array('2' => 'Cho hoạt động', '1' => 'Ngừng hoạt động'),
        );

        $this->render('index', $data);
    }

    public function actionCreate() {
        $title_page = 'Thêm tài liệu';
        $this->pageTitle = $title_page;
        $info = Session::get('info_user');
        $Cmod = new CategoryProducts();
        $param = array(
            "title" => ObjInput::get("title", "str", ""),
            "link_other" => ObjInput::get("link_other", "str", ""),
            "desc" => ObjInput::get("desc", "str", ''),
            "status" => ObjInput::get("status", "int", 2),
            "p_id" => ObjInput::get("p_id", "str", "TL-".time()),
            "type" => ObjInput::get("type", "array", ""),
            "parent" => ObjInput::get("parent", "str", ""),
            "picture" => ObjInput::get("picture", "str", ""),
            "tag" => ObjInput::get("tag", "str", ""),
            "keyword" => ObjInput::get("keyword", "str", ""),
            "attr" => ObjInput::get("attr", "str", ""),
            "short" => ObjInput::get("short", "str", ""),
            "full" => ObjInput::get("full", "def", ""),
            "count" => ObjInput::get("count", "int", 0),
            "count_down" => ObjInput::get("count_down", "int", 0),
            "create_time" => SystemDateTime::to_time_new(ObjInput::get("create_time", "str", date('d-m-Y'))),
            "proprice" => ObjInput::get("proprice", "int", 0),
            "price" => ObjInput::get("price", "int", 0),
            "qty" => ObjInput::get("qty", "int", 0),
            'account_id' => 0,
            'account_name' => $info['id'],
        );
        $sub_category_id2 = ObjInput::get('sub_category_id2', 'def', '', 'admin');
        $fck_n = new FCKeditor('full');
        $fck_n->Value = $param['full'];
        $fck_n->Height = 500;


        $this->_model->attributes = $_POST;
        if (Yii::app()->request->isPostRequest && $this->_model->validate()) {
            if ($sub_category_id2) {
                $param['sub_category_id2'] = json_encode($sub_category_id2);
            }
            if (isset($_FILES['file']) && $_FILES['file']['name'][0] != '') {
                $file = $_FILES['file'];

                $name = time() . '_' . SystemBase::text_url(substr($param['title'], 0, '150'));

                $images = Upload::UploadMutil($file, IMG_PRODUCT, IMG_PRODUCT_THUMB, IMG_W, IMG_WT, IMG_HT, $name);
                $param['picture'] = $images;
                $param['picture2'] = $images;
            }
            if (isset($_FILES['file2']) && $_FILES['file2']['name'][0] != '') {
                $file2 = $_FILES['file2'];
                $name = time() . '_' . SystemBase::text_url(substr($param['title'], 0, '150'));
                $images_des = Upload::UploadMutil($file2, 'images/img_des/', 'images/img_des/thumbs/', IMG_W, IMG_WT, IMG_HT, $name);
                if ($images_des) {
                    $exPlZ = explode('|', $images_des);
                    $camta = '';
                    foreach ($exPlZ as $key12314 => $value433434) {
                        $camta .= '<img src="'.ROOT_URL.DS.'images/img_des/'.$value433434.'"><br>';
                    }
                    $param['full'] = $camta.$param['full'];
                }
            }
            if (isset($_FILES['file_tailieu']) && $_FILES['file_tailieu']['size'] > 0) {
                $path = DIR_TAILIEU . date('mY') . '/';
                $rs = SystemFile::uploadFile($_FILES['file_tailieu'], $path, time(), 10 * 1024);
                if ($rs['error_message'] == '') {
                    $param['file'] = $rs['images'];
                } else {
                    $this->setErrors($rs['error_message']);
                }
            }
            if ($param['parent'] <> '0') {
                $arr = explode('|', $param['parent']);
                if (count($arr) > 1) {
                    $param['sub_category_id'] = (int) $arr[0];
                    $param['category_id'] = (int) $arr[1];
                } else
                    $param['category_id'] = (int) $arr[0];
            }

            if (is_array($param['type'])) {
                $param['type'] = implode("|", $param['type']);
            }
            unset($param['parent']);
            $ins = $this->_model->insertData($param);
            if ($ins > 0) {
                $this->setErrors('Thêm mới thành công', 'success');
                $this->redirect(Yii::app()->createUrl('admin/Products'));
            } else {
                @unlink($path . $param['file']);
                $this->setErrors('Có lỗi trong quá trình xử lý');
            }
        } else {
            if (is_array($param['type'])) {
                $param['type'] = implode("|", $param['type']);
            }
            $this->setErrors($this->_model->getErrorForm());
        }

        $data = array(
            'link_back' => Yii::app()->createUrl('admin/Products'),
            'link_action' => Yii::app()->createUrl('admin/Products/Create'),
            'error' => $this->_model->_getError(),
            'success' => $this->_model->_getSuccess(),
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_PRODUCT_THUMB,
            'title_page' => $title_page,
            'arr_status' => $this->_arrStatus,
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $param['status'], '', 'class="form-control"'),
            'combo_types' => Strings::combobox('type', $this->_type, $param['type'], '', 'class="form-control"'),
            'combo_category' => $Cmod->getFullCategory_Option($param['parent']),
            'combo_category2' => $Cmod->getFullCategory_Option2($param['parent']),
            'array_category' => $this->_model->getDataCategory(),
            'type' => $this->_type,
            'data' => $param,
            'fck_noidung' => $fck_n->CreateHtml(),
        );

        $this->render('form', $data);
    }

    private function _updateStatusList($data_output) {
        $status = ObjInput::get('status', 'int', 2);
        $id = ObjInput::get('id', 'int', 0);
        if ($status == '2') {
            $status = 1;
        } else {
            $status = 2;
        }

        $update = $this->_model->updateDataStatus(array('status' => $status), $id);
        if ($update > 0) {

            if ($data_output["account_id"] > 0 && $status === 1) {
                //var_dump(1);die();
                //Add point khi update trạng thái nếu tài khoản khác admin
                $account = new Account;
                if ($account->addPoint(POINT_ADD_UPLOAD, $data_output['account_id'], ' Upload tài liệu: ' . $data_output['title']) > 0) {
                    $this->setErrors('Cập nhật Point thành công', 'success');
                } else
                    $this->setErrors('Có lỗi trong quá trình xử lý cập nhật point');
            }
            $this->setErrors('Cập nhật thành công', 'success');
            $this->redirect(Yii::app()->createUrl('admin/Products/'));
        } else {
            $this->setErrors('Có lỗi trong quá trình xử lý');
            $this->redirect(Yii::app()->createUrl('admin/Products/'));
        }
    }

    private function _delImgae($data_output) {
        $image = ObjInput::get('image', 'str', '');
        $id = ObjInput::get('id', 'int', 0);
        if ($image != '') {
            $image_replace = base64_decode($image);
            $u = $this->_model->updateDataStatus(array('picture' => '', 'picture2' => ''), $id, false);
            if ($u > 0) {
                $this->setErrors('Cập nhật thành công', 'success');
                @unlink(ROOT_PATH . '/' . IMG_PRODUCT . $image_replace);
                @unlink(ROOT_PATH . '/' . IMG_PRODUCT_THUMB . $image_replace);
                $this->redirect(Yii::app()->createUrl('admin/Products/Edit', array('id' => $id)));
            } else {
                $this->setErrors('Có lỗi trong quá trình xử lý');
                $this->redirect(Yii::app()->createUrl('admin/Products/Edit', array('id' => $id)));
            }
        }
    }

    function _delFile($data_output) {
        $files = ObjInput::get('files', 'str', '');
        $id = ObjInput::get('id', 'int', 0);
        if ($files) {
            $files_replace = $files;
            $a = explode('_', $files_replace);
            $b = explode('.', $a[1]);
            $link_tl = ROOT_PATH . '/' . DIR_TAILIEU . date('mY', $b[0]) . '/';
            $u = false;
            $u = $this->_model->updateData(array('file' => ''), $id, false);
            if ($u != false) {
                @unlink($link_tl . $files_replace);
                $this->setErrors('Cập nhật thành công', 'success');
                $this->redirect(Yii::app()->createUrl('admin/Products/Edit', array('id' => $id)));
            } else {
                $this->setErrors('Có lỗi trong quá trình xử lý');
                $this->redirect(Yii::app()->createUrl('admin/Products/Edit', array('id' => $id)));
            }
        }
    }

    public function actionEdit() {
        $title_page = 'Cập nhật tài liệu';
        $this->pageTitle = $title_page;
        $id = ObjInput::get('id', 'int', 0);

        $data_output = $this->_model->getOneData($id);
        if (!$data_output) {
            $this->setErrors('Không tồn tại tài liệu này');
            $this->redirect(Yii::app()->createUrl('admin/Products/'));
        }
        /** Thay đổi trạng thái list * */
        if (isset($_GET['status'])) { // Lưu trạng thái
            $keychange = ObjInput::get('key_change', 'str', '');
            if ($keychange == 'tailieu.net') {
                $this->_updateStatusList($data_output);
            }
        }

        /** Xóa Ảnh * */
        if (isset($_GET['image'])) {
            $this->_delImgae($data_output);
        }

        /** Xóa TL * */
        if (isset($_GET['files'])) {
            $this->_delFile($data_output);
            die();
        }

        // echo date('d/m/Y h:i:s',SystemDateTime::to_time_new(ObjInput::get("begin_time", "str", date('d-m-Y'))));die();

        $Cmod = new CategoryProducts();
        $param = array(
            "title" => ObjInput::get("title", "str", ""),
            "link_other" => ObjInput::get("link_other", "str", ""),
            "desc" => ObjInput::get("desc", "str", ''),
            "status" => ObjInput::get("status", "int", 2),
            "p_id" => ObjInput::get("p_id", "str", ""),
            "type" => ObjInput::get("type", "array", ""),
            "parent" => ObjInput::get("parent", "str", ""),
            //  "picture" => ObjInput::get("picture", "str", ""),
            "tag" => ObjInput::get("tag", "str", ""),
            "keyword" => ObjInput::get("keyword", "str", ""),
            "attr" => ObjInput::get("attr", "str", ""),
            "short" => ObjInput::get("short", "str", ""),
            "full" => ObjInput::get("full", "def", ""),
            "count" => ObjInput::get("count", "int", 0),
            "count_down" => ObjInput::get("count_down", "int", 0),
            "create_time" => SystemDateTime::to_time_new(ObjInput::get("begin_time", "str", date('d-m-Y'))),
            "proprice" => ObjInput::get("proprice", "int", 0),
            "price" => ObjInput::get("price", "int", 0),
            "qty" => ObjInput::get("qty", "int", 0),
            "sub_category_id2" => ObjInput::get("sub_category_id2", "def", $data_output['sub_category_id2']),
        );
        $fck_n = new FCKeditor('full');
        $fck_n->Value = $data_output['full'];
        $fck_n->Height = 500;

        $link_tl = '';
        if ($data_output['file'] <> '') {

            $a = explode('_', $data_output['file']);
            $b = explode('.', $a[1]);
            $link_tl = DIR_TAILIEU . date('mY', $b[0]) . '/';
            // $link_tl = DIR_TAILIEU . date('mY', explode('.', explode('_', $data_output['file'])[1])[0]) . '/';
        }
        $this->_model->attributes = $_POST;
        if (Yii::app()->request->isPostRequest && $this->_model->validate()) {
            $param['sub_category_id2'] = ObjInput::get("sub_category_id2", "def", '','POST');
            if ($param['sub_category_id2'] && is_array($param['sub_category_id2'])) {
                $param['sub_category_id2'] = json_encode($param['sub_category_id2']);
            }
            if (isset($_FILES['file']) && $_FILES['file']['name'][0] != '') {
                $file = $_FILES['file'];
                $name = time() . '_' . SystemBase::text_url(substr($param['title'], 0, '150'));

                $images = Upload::UploadMutil($file, IMG_PRODUCT, IMG_PRODUCT_THUMB, IMG_W, IMG_WT, IMG_HT, $name);
                if ($images) {
                    $param['picture'] = $images;
                    $param['picture2'] = $images;
                    @unlink('./' . IMG_PRODUCT . $data_output['picture']);
                    @unlink('./' . IMG_PRODUCT_THUMB . $data_output['picture2']);
                } else {
                    $param['picture'] = $param['picture2'] = $data_update['picture'];
                }
            }
            
            if (isset($_FILES['file2']) && $_FILES['file2']['name'][0] != '') {
                $file2 = $_FILES['file2'];
                $name = time() . '_' . SystemBase::text_url(substr($param['title'], 0, '150'));
                $images_des = Upload::UploadMutil($file2, 'images/img_des/', 'images/img_des/thumbs/', IMG_W, IMG_WT, IMG_HT, $name);
                if ($images_des) {
                    $exPlZ = explode('|', $images_des);
                    $camta = '';
                    foreach ($exPlZ as $key12314 => $value433434) {
                        $camta .= '<img src="'.ROOT_URL.DS.'images/img_des/'.$value433434.'"><br>';
                    }
                    $param['full'] = $camta.$param['full'];
                }
            }
            
            if (isset($_FILES['file_tailieu']) && $_FILES['file_tailieu']['size'] > 0) {
                $path = DIR_TAILIEU . date('mY') . '/';
                $rs = SystemFile::uploadFile($_FILES['file_tailieu'], $path, time(), 10 * 1024);
                if ($rs['error_message'] == '') {
                    $param['file'] = $rs['images'];
                    @unlink('./' . $link_tl . $data_output['file']);
                } else {
                    $this->setErrors($rs['error_message']);
                }
            } else {
                $data_update['file'] = $data_output['file'];
            }


            if ($param['parent'] <> '0') {
                $arr = explode('|', $param['parent']);
                if (count($arr) > 1) {
                    $param['sub_category_id'] = (int) $arr[0];
                    $param['category_id'] = (int) $arr[1];
                } else
                    $param['category_id'] = (int) $arr[0];
            }

            if (is_array($param['type'])) {
                $param['type'] = implode("|", $param['type']);
            }
            $param['update_time'] = time();

            unset($param['parent']);
            $ins = $this->_model->updateData($param, $id);
            if ($ins > 0) {

                if ($data_output["account_id"] > 0 && $param['status'] === 1) {
                    //Add point khi update trạng thái nếu tài khoản khác admin
                    $account = new Account;
                    if ($account->addPoint(0, $data_output['account_id'], ' Upload tài liệu: ' . $data_output['title']) > 0) {
                        $this->setErrors('Cập nhật Point thành công', 'success');
                    } else
                        $this->setErrors('Có lỗi trong quá trình xử lý cập nhật point');
                }

                $this->setErrors('Cập nhật thành công', 'success');
                $this->redirect(Yii::app()->createUrl('admin/Products'));
            } else {
                $this->setErrors('Có lỗi trong quá trình xử lý');
            }
        } else {
            $this->setErrors($this->_model->getErrorForm());
        }

        if ($param['sub_category_id2'] && !is_array($param['sub_category_id2'])) {
            $param['sub_category_id2'] = json_decode($param['sub_category_id2'], true);
        }

        $data = array(
            'link_tailieu' => $link_tl,
            'link_back' => Yii::app()->createUrl('admin/Products'),
            'link_action' => Yii::app()->createUrl('admin/Products/Create'),
            'error' => $this->_model->_getError(),
            'success' => $this->_model->_getSuccess(),
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_PRODUCT_THUMB,
            'title_page' => $title_page,
            'arr_status' => $this->_arrStatus,
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $data_output['status'], '', 'class="form-control"'),
            // 'combo_types' => Strings::combobox('type', $this->_type, $param['type'], '', 'class="form-control"'),
            'combo_category' => $Cmod->getFullCategory_Option(($data_output['sub_category_id'] != '0' ? $data_output['sub_category_id'] . '|' . $data_output['category_id'] : $data_output['category_id'])),
            'combo_category2' => $Cmod->getFullCategory_Option2($param['parent'], $param['sub_category_id2']),
            'array_category' => $this->_model->getDataCategory(),
            'type' => $this->_type,
            'data' => $data_output,
            'link_images_full' => Yii::app()->request->baseUrl . DS . IMG_PRODUCT,
            'fck_noidung' => $fck_n->CreateHtml(),
			
        );

        $this->render('form', $data);
    }

    public function actionDel() {
        $id = ObjInput::get('id', 'int', 0);
        if ($id <> 0) {
            $rs = $this->_model->deleteData($id);
            $this->setErrors($rs[1], ($rs[0] == '0' ? 'success' : 'error'));
            $this->redirect(Yii::app()->createUrl('admin/Products'));
        } else {
            $this->setErrors('Tham số sai.');
            $this->redirect(Yii::app()->createUrl('admin/Products'));
        }
    }

    public function actionDownload() {
        $files = ObjInput::get('files', 'str', '');
        $files_replace = base64_decode($files);

//thực hiện quá trình kiểm tra
        if (!preg_match('/^[a-z0-9\_\-][a-z0-9\_\-\. ]*$/i', $filename) || !is_file($upload_dir . $filename) || !is_readable($upload_dir . $filename)) {
            echo "Loi: Ten file khong hop le hoac file khong ton tai!";
            exit(-1);
        } //end if
//mở file để đọc với chế độ nhị phân (binary)
        $fp = fopen($upload_dir . $filename, "rb");

//gởi header đến cho browser
        header('Content-type: application/octet-stream');
        header('Content-disposition: attachment; filename="' . $filename . '"');
        header('Content-length: ' . filesize($upload_dir . $filename));

//đọc file và trả dữ liệu về cho browser
        fpassthru($fp);
        fclose($fp);
    }

}
