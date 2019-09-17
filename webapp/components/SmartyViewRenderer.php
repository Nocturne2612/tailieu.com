<?php
class SmartyViewRenderer extends CApplicationComponent implements IViewRenderer {
    /**
     * @var Smarty
     */
    private $_smarty;
    /**
     * @var string
     */
    public $fileExtension = '.tpl'; // or ".php" if you like
 
    public function init() {
        $smartyPath = Yii::getPathOfAlias('application.vendors.smarty.libs');
        Yii::$classMap['Smarty'] = $smartyPath . '/Smarty.class.php';
        Yii::$classMap['Smarty_Internal_Data'] = $smartyPath . '/sysplugins/smarty_internal_data.php';
        $this->_smarty = new Smarty();
        $this->_smarty->compile_dir = Yii::app()->getRuntimePath() . '/smarty/compile';
        $this->_smarty->cache_dir = Yii::app()->getRuntimePath() . '/smarty/cache';
        $this->_smarty->left_delimiter = '{{'; // chenge it if you want other delimiter
        $this->_smarty->right_delimiter = '}}';
        $this->_smarty->force_compile = true;
        Yii::registerAutoloader('smartyAutoload');
    }
 
    public function renderFile($context, $file, $data, $return) {
        foreach ($data as $key => $value) {
            $this->_smarty->assign($key, $value);
        }
        $return = $this->_smarty->fetch($file);
        if ($return) {
            return $return;
        }
        else {
            echo $return;
        }
    }
}