<?php
class FormValidation {
	protected $_fieldName = '';
	public function __construct() {
		
	}
	
	public function onSubmit($name) {
		$this->_fieldName = trim(ObjInput::get($name,'str','','POST'));
		
		if ($this->_fieldName <> '') {
			return true;
		}
		
		return false;
	}
	
	public function checkSubmit($name) {
        if (isset($_POST[$name])) {
            return true;
        }
        return false;
    }
}