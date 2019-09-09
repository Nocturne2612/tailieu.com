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

        <div class="page-container">
            {$this->widget('AdminWidgets',['methodName'=>'admin_slider'],true)} 
            <div class="main-content">
                <nav class="navbar user-info-navbar" role="navigation">
                    <!-- Left links for user info navbar -->
                    <ul class="user-info-menu left-links list-inline list-unstyled">
                        <li class="hidden-sm hidden-xs">
                            <a href="#" data-toggle="sidebar">
                                <i class="fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="user-info-menu right-links list-inline list-unstyled">
                        {$this->widget('AdminWidgets',['methodName'=>'admin_user_drop'],true)} 
                    </ul>
                </nav>
                {$content}

                {$this->widget('AdminWidgets',['methodName'=>'admin_footer'],true)}
            </div>

        </div> 

    </body>
</html>
