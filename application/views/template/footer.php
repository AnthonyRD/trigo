<!-- jQuery 2.2.3 -->
<script src="/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Load JS -->
<script src="/assets/plugins/iCheck/icheck.min.js"></script>
<?php if (isset($plugin_js)):foreach($plugin_js as $key_src => $value_src):?>
<?="<script src='".base_url()."assets/plugins/".$value_src."'></script>"?>
<?php endforeach; endif;?>
<?php if (isset($js)):foreach($js as $key_src => $value_src):?>
<?="<script src='".base_url()."assets/dist/".$value_src."'></script>"?>
<?php endforeach; endif;?>
</body>
</html>