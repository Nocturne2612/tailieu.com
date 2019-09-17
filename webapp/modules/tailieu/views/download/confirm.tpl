{if $errors <> ''}
    <div id="content">
        <div class="layout fn-clear" style="margin-bottom: 100px;">
            <div class="btn btn-large btn-secondary">{$errors}</div>
			<center><img src="https://tailieukientruc.net/images/Sorry_2.png" alt=""><br> 
			<a class="error_show" href="https://www.facebook.com/messages/t/thuvienkientrucchiase" target="_blank" class="download-button">Nhấn vào đây để thông báo link download lỗi với ban quản trị!</a>

				{$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'],true)}</center>

        </div>
    </div>
{/if}
