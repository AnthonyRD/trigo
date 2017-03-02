<?php if(isset($sidebar_menu) && $sidebar_menu == true):?>
    </section>
      <footer class="main-footer no-print">
    <section class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </section>
    <strong>Copyright &copy; 2017 <a href="http://sysedit.net">Sysedit.net</a>.</strong> All rights    
    reserved.
  </footer>
   <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <section class="tab-content">
      <!-- Home tab content -->
      <section class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <section class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </section>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <section class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </section>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <section class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </section>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <section class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </section>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <section class="progress progress-xxs">
                <section class="progress-bar progress-bar-danger" style="width: 70%"></section>
              </section>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <section class="progress progress-xxs">
                <section class="progress-bar progress-bar-success" style="width: 95%"></section>
              </section>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <section class="progress progress-xxs">
                <section class="progress-bar progress-bar-warning" style="width: 50%"></section>
              </section>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <section class="progress progress-xxs">
                <section class="progress-bar progress-bar-primary" style="width: 68%"></section>
              </section>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </section>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <section class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</section>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <section class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <section class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </section>
          <!-- /.form-group -->

          <section class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </section>
          <!-- /.form-group -->

          <section class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </section>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <section class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </section>
          <!-- /.form-group -->

          <section class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </section>
          <!-- /.form-group -->

          <section class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </section>
          <!-- /.form-group -->
        </form>
      </section>
      <!-- /.tab-pane -->
    </section>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This section must be placed
       immediately after the control sidebar -->
  <section class="control-sidebar-bg"></section>
</section>
<?php elseif(isset($view_content) && $view_content == 'orders/create'):?>
</section>
<?php endif; ?>
<!-- jQuery 2.2.3 -->
<script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Load JS -->
<?php if (isset($plugin_js)):foreach($plugin_js as $key_src => $value_src):?>
<?="<script src='".base_url()."assets/plugins/".$value_src."'></script>"?>

<?php endforeach; endif;?>
<?php if (isset($js)):foreach($js as $key_src => $value_src):?>

<?="<script src='".base_url()."assets/dist/".$value_src."'></script>"?>
<?php endforeach; endif;?>
<!-- CDN JS-->
<?php if (isset($cdn)):foreach($cdn as $key_href => $value_href):?>
<?="<script src='$value_href'></script>"?>	
<?php endforeach; endif;?>

</body>
</html>
