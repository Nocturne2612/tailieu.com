


<div id="content">
   
     
    <div class="layout-fluid  fn-clear">
        <div class="" style="padding-top: 10px;">
         {$this->widget('TWidgets',['methodName'=>'breadcrums','data'=>$data],true)}
		 {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER'],true)}
    </div>
        <div class="thumbnail-wrapper">
            <ul class="thumbnail-group fn-clear">
               
                {$this->widget('TWidgets',['methodName'=>'tabs_new'],true)}
              
                {$this->widget('TWidgets',['methodName'=>'productView','product'=> $output['data'],'check'=> true],true)} 
            </ul>


<!-- // adsense-->		
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-9158244511857348"
     data-ad-slot="2308769317"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- // end adsense-->


        </div>
		{$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER'],true)}
        {$output['pageHtml']}


    </div>
    
</div>



