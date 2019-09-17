<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <meta name="description" content="{Yii::app()->params.Desc}" />
            <meta name="author" content="{Yii::app()->params.Author}" />
           <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">-->
                <title>{CHtml::encode($this->pageTitle)}</title>

    </head>
        <body class="page-body login-page login-light"> 
                    {$content}
                    {$this->widget('AdminWidgets',['methodName'=>'admin_footer'],true)}
        </body>
</html>
