<div id="content" class="row">
  <div class="col-md-12">
    <h1 class="title" align="center">Xác nhận nạp Point</h1>
    <div class="panel panel-deafault">
      <div class="panel-body">
        <div class="form-horizontal pdtop2"> {if $errors <> ''}
          <div class="alert alert-danger">{$errors}</div>
          {/if}
          {if $success <> ''}
          <div class="alert alert-success">{$success}</div>
          {/if}
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-3 pdr5">
              <input type="button" class="btn btn-info" value="Quay lại" onClick="location.href='{$link_addfund}'">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{literal}
<style> 
</style>
{/literal}