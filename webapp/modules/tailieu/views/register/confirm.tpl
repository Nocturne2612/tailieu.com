
<div class="container">
    <h1 class="title" align="center">Xác thực địa chỉ Email tài khoản MOL</h1>
    <div class="row"> 
        <!--begin left Cold-->
        <div class="col-sm-offset-2 col-md-8"> 
            <!--form-->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        {if $err <> ''}
                            <div class="media-body">
                                <div class="alert alert-danger">{$err}</div>
                            </div> 
                        {elseif $success <>''}
                            <div class="pull-left"><img src="{Yii::app()->baseURL}/images/email-envelope2.png"></div>
                            <div class="media-body">
                                <div class="alert alert-success">{$success}</div>
                                <p><a href="{Yii::app()->baseURL}/mol" class="btn btn-warning btn-sm">OKay</a></p>
                            </div>
                        {else}  

                            <div class="pull-left"><img src="{Yii::app()->baseURL}/images/email-envelope2.png"></div>
                            <div class="media-body">
                                <p> You must verify your email address before you can begin using your MOL Account. </p>
                                <ol>
                                    <li>Look for a verification email in your inbox, {$email}. </li>
                                    <li>Click on the link in the email to confirm your email address. </li>
                                    <li>That's it! </li>
                                </ol>
                                <p> You can start using your MOL Account to reload MOLPoints and buy game credits (and more!). </p>
                                <p><a href="{Yii::app()->baseURL}/mol" class="btn btn-warning btn-sm">OKay</a></p>
                            </div>

                        {/if}
                    </div>
                </div>
            </div>
        </div>
        <!--end left Cold--> 

    </div>
</div>
