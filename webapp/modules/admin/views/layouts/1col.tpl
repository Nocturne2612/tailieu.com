<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="{Yii::app()->params.Desc}" />
<meta name="author" content="{Yii::app()->params.Author}" />
<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic" />-->
<!--[if lt IE 9]>
                <script src="{Yii::app()->baseUrl}/assets/xeon/js/html5shiv.min.js"></script>
                <script src="{Yii::app()->baseUrl}/assets/xeon/js/respond.min.js"></script>
        <![endif]-->
<title>{CHtml::encode($this->pageTitle)}</title>
</head>
<body class="page-body">
{$this->widget('AdminWidgets',['methodName'=>'admin_menu'],true)}
<div class="page-container">
  <div class="main-content"> {$content}
    
    {$this->widget('AdminWidgets',['methodName'=>'admin_footer'],true)} </div>
</div>
<script type="text/javascript">
            if ($('.panel-body .alert').html() != 'undefined') {
                setTimeout(function () {
                    $('.panel-body .alert').hide();
                }, 5000);
            }

        </script>
</body>
</html>
