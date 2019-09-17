


<div id="content">


    <div class="layout-fluid  fn-clear">
        <div class="" style="padding-top: 10px;">

        </div>
        <div class="thumbnail-wrapper">
            <ul class="thumbnail-group fn-clear">

               {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER'],true)}
                <script>
                    (function () {
                        var cx = '002889697032014665731:vb_xsc__cgq';
                        var gcse = document.createElement('script');
                        gcse.type = 'text/javascript';
                        gcse.async = true;
                        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(gcse, s);
                    })();
                </script>
                <gcse:search></gcse:search>
                 {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER'],true)}
            </ul>
        </div>

    </div>

</div>



