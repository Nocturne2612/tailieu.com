<?php
class Captcha extends CCaptchaAction {
	public function run() {
		$this->transparent = true;
		//$this->fontFile = ROOT_PATH . DS. 'arial.ttf';
		if(isset($_GET[self::REFRESH_GET_VAR]))  // AJAX request for regenerating code
		{
			$code=$this->getVerifyCode(true);
			echo CJSON::encode(array(
				'hash1'=>$this->generateValidationHash($code),
				'hash2'=>$this->generateValidationHash(strtolower($code)),
				// we add a random 'v' parameter so that FireFox can refresh the image
				// when src attribute of image tag is changed
				'url'=>$this->getController()->createUrl($this->getId(),array('v' => uniqid())),
			));
		}
		else {
			$code=$this->getVerifyCode(true);
			$this->renderImage($code);
		}
		
		Yii::app()->end();
	}
	/*// list 5 charter
	protected function generateVerifyCode() {
		$code = strval(rand(10000, 99999));
		return $code;
	}*/
	
	
	// 3 charter and is number
	protected function generateVerifyCode() {
		$letters = rand() . md5(rand()) . md5('vimoMobilePlayment');
		$letters = preg_replace('#\D#', "", md5($letters));
		$code = '';
		$code = substr($letters,rand(1,9),3);

		return $code;
	}
}