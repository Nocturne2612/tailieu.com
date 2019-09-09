<?php

/**
 *
 * @author DUCLM
 */
class CategoryProductsController extends AdminController {

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
        $Model = new CategoryProducts();
        $arrCategory = $Model->getCategory();
        if (ObjInput::get('cache', 'int', 0) == '1') {
            $this->MakeCaches();
            $this->redirect(Yii::app()->createUrl('admin/categoryproducts'));
        }
        $data = array(
            'link_action' => Yii::app()->createUrl('admin/categoryproducts'),
            'link_create' => Yii::app()->createUrl('admin/categoryproducts/create/'),
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_NEWS_THUMB,
            'arr_status' => $this->_arrStatus,
            'arr_statuss' => array('0' => 'Cho hoạt động', '1' => 'Ngừng hoạt động'),
            'category' => $arrCategory);

        $this->render('index', $data);
    }

    private function _delImgae($id) {
        $Model = new CategoryProducts();
        $image = ObjInput::get('image', 'str', '');
        $id = ObjInput::get('id', 'int', 0);
        if ($image != '') {
            $image_replace = base64_decode($image);
            $u = $Model->updateData(array('icon' => ''), $id);
            if ($u > 0) {
                $this->setErrors('Cập nhật thành công', 'success');
                @unlink('./' . IMG_PRODUCT . $image_replace);
                @unlink('./' . IMG_PRODUCT_THUMB . $image_replace);
                $this->MakeCaches();
                $this->redirect(Yii::app()->createUrl('admin/categoryproducts/edit', array('id' => $id)));
            } else {
                $this->setErrors('Có lỗi trong quá trình xử lý');
                $this->redirect(Yii::app()->createUrl('admin/categoryproducts/edit', array('id' => $id)));
            }
        }
    }

    public function actionEdit() {
        $id = ObjInput::get('id', 'int', 0);
        $Model = new CategoryProducts();
        if (isset($_GET['image']) && $_GET['image'] <> '') {
            $this->_delImgae($id);
        }
        if (isset($_POST['save']) && $_POST['save'] <> '') { // Lưu STT
            $arr_stt = ObjInput::get('stt', 'array', '');
            $arr_ids = ObjInput::get('ids', 'array', '');
            $Model->updateSttProduct($arr_stt, $arr_ids);
            echo Strings::alert('Cập nhật thành công', Yii::app()->createUrl('admin/categoryproducts'));
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
                echo Strings::alert('Cập nhật thành công', Yii::app()->createUrl('admin/categoryproducts/'));
                die();
            }
        } else {
            $item = $Model->getOneProducts($id);
            if (!$item) {
                echo Strings::alert('Không tồn tại tin tức này', Yii::app()->createUrl('admin/categoryproducts/'));
                die();
            }
            $title = ObjInput::get('title', 'str', '');
            $category_type = ObjInput::get('category_type', 'int', '0');
            $desc = ObjInput::get('desc', 'str', '');
            $tag = ObjInput::get('tag', 'str', '');
            $category_type = ObjInput::get('category_type', 'int', '0');
            $status = ObjInput::get('status', 'int', 0);
            $parent_id = ObjInput::get('parent_id', 'int', 0);
            $acsii = ObjInput::get('acsii', 'str', Strings::text_url($title));
            $stt = ObjInput::get('stt', 'int', 1);
            $short = ObjInput::get('short', 'def', '');

            if (Yii::app()->request->isPostRequest) {

                if ($title != '' && $parent_id !== $id) {
                    $data = array(
                        'short' => $short,
                        'title' => $title,
                        'desc' => $desc,
                        'tag' => $tag,
                        'acsii' => $acsii,
                        'stt' => $stt,
                        'create_time' => time(),
                        'status' => $status,
                        'category_type' => $category_type,
                        'parent_id' => $parent_id,
                    );
                    if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
                        $file = $_FILES['file'];

                        $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii($title)), '30') . '_' . time();
                        $images = Upload::UploadOne($_FILES['file'], IMG_PRODUCT, IMG_PRODUCT_THUMB, 32, 20, 20, $name);
                        $data['icon'] = $images;
                        @unlink('./' . IMG_PRODUCT_THUMB . $item['icon']);
                        @unlink('./' . IMG_PRODUCT . $item['icon']);
                    } else {
                        $data['icon'] = $item['icon'];
                    }
                    $id_u = $Model->updateData($data, $id);
                    if ($id_u > 0) {
                        $this->MakeCaches();
                        echo Strings::alert('Cập nhật thành công', Yii::app()->createUrl('admin/categoryproducts/'));
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
            $fck_n = new FCKeditor('short');
            $fck_n->Value = $item['short'];
            $fck_n->Height = 300;
            $this->render('form', array(
                'data' => $item,
                'link_home' => Yii::app()->createUrl('admin/categoryproducts/'),
                'link_create' => Yii::app()->createUrl('admin/categoryproducts/create/'),
                'combo_parent' => $Model->getParentCategory_Option($item['parent_id']),
                'err' => $this->_err,
                'combo_status' => Strings::combobox('status', $this->_arrStatus, $item['status'], '', 'class="form-control"'),
                'link_images' => Yii::app()->request->baseUrl . DS . IMG_PRODUCT_THUMB,
                'fck_short' => $fck_n->CreateHtml(),
            ));
        }
    }

    public function actionCreate() {

        $Model = new CategoryProducts();
        $err = '';
        $title = ObjInput::get('title', 'str', '');
        $category_type = ObjInput::get('category_type', 'int', '0');
        $status = ObjInput::get('status', 'int', 1);
        $parent_id = ObjInput::get('parent_id', 'int', 0);
        $acsii = ObjInput::get('acsii', 'str', Strings::text_url($title));
        $stt = ObjInput::get('stt', 'int', 0);
        $tag = ObjInput::get('tag', 'str', '');
        $short = ObjInput::get('short', 'def', '');
        $data = array(
            'title' => $title,
            'tag' => $tag,
            'desc' => ObjInput::get('desc', 'str', ''),
            'acsii' => $acsii,
            'stt' => $stt,
            'create_time' => time(),
            'status' => $status,
            'category_type' => $category_type,
            'parent_id' => $parent_id,
            'short' => $short,
        );

        if (Yii::app()->request->isPostRequest) {
            if ($title != '') {
                if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
                    $file = $_FILES['file'];
                    $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii($title)), '30') . '_' . time();
                    $images = Upload::UploadOne($_FILES['file'], IMG_PRODUCT, IMG_PRODUCT_THUMB, '32', '20', '20', $name);
                    $data['icon'] = $images;
                }

                $id_u = $Model->insertData($data);
                if ($id_u > 0) {
                    $this->MakeCaches();
                    echo Strings::alert('Thêm mới thành công', Yii::app()->createUrl('admin/categoryproducts/'));
                    die();
                } else {
                    $this->_err = 'Có lỗi trong quá trình xử lý';
                }
            } else {
                $this->_err = 'Tiêu đề không được để trống';
            }
        }
        $fck_n = new FCKeditor('short');
        $fck_n->Value = $short;
        $fck_n->Height = 300;
        $this->render('form', array(
            'data' => $data,
            'link_home' => Yii::app()->createUrl('admin/categoryproducts/'),
            'link_create' => Yii::app()->createUrl('admin/categoryproducts/create/'),
            'combo_parent' => $Model->getParentCategory_Option($parent_id),
            'err' => $this->_err,
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $status, '', 'class="form-control"'),
            'fck_short' => $fck_n->CreateHtml(),
        ));
    }

    public function actionDel() {
        $id = ObjInput::get('id', 'int', 0);
        if ($id <> 0) {
            CategoryProducts::deleteData($id);
        } else
            echo Strings::alert('Lỗi không thực hiện được', Yii::app()->createUrl('admin/categoryproducts/'));

        die();
    }

    private function MakeCaches() {
        $Model = new CategoryProducts();
        $get_data = $Model->getCategoryCache();

        $li_mleft = $li_right = '';
        $site_map = '<ul class="sitemap-nav clearfix"><li><ul class="clearfix">';
        if ($get_data['parent_category']) {
            foreach ($get_data['parent_category'] as $k2 => $v2) {

                if ($v2['category_type'] == 1) {
                    $link1 = SystemBase::buildUrl('tailieu/categorydocument', array('title' => $v2['title']));
                    if (!isset($get_data['sub_category'][$v2['id']])) {
                        $li_mleft .= ' <li>
                        <a title="' . $v2['title'] . '" href="' . $link1 . '">
                            ' . ($v2['icon'] <> '' ? '<img src="' . ROOT_URL . '/' . IMG_PRODUCT_THUMB . $v2['icon'] . '">' : '') . '  
                            <span>' . $v2['title'] . '</span>
                        </a></li>';
                    } else {
                        $li_mleft .= ' <li>
                        <a href="' . $link1 . '" class="dc-mega" title="' . $v2['title'] . '">
                         ' . ($v2['icon'] <> '' ? '<img src="' . ROOT_URL . '/' . IMG_PRODUCT_THUMB . $v2['icon'] . '">' : '') . '   
                          <span>' . $v2['title'] . '</span><span class="dc-mega-icon"></span>
                        </a>';

                        $li_s = '';
                        foreach ($get_data['sub_category'][$v2['id']] as $k3 => $v3) {
                            if ($v3['category_type'] == 1) {
                                $li_s .= '  <li>
                               <a title="' . $v3['title'] . '" href="' . SystemBase::buildUrl('tailieu/categorydocument', array('title' => $v3['title'])) . '">
                         ' . ($v3['icon'] <> '' ? '<img src="' . ROOT_URL . '/' . IMG_PRODUCT_THUMB . $v3['icon'] . '">' : '') . '            
                          <span>' . $v3['title'] . '</span>
                        </a>
                            </li>';
                            }
                        }
                        if ($li_s <> '')
                            $li_mleft .= '<ul class="clearfix">' . $li_s . '</ul></li>';
                    }
                }
            }
            $site_map .= '</ul></li></ul>';
        }
        $file_path = Yii::getPathOfAlias("webroot") . "/webapp/modules/tailieu/components/widgets/views/";
        $this->makeCache('menu_left.tpl', $file_path, $li_mleft);
        $this->makeCache('cache_category.cache', DIR_CACHE, json_encode($get_data));
    }

}
