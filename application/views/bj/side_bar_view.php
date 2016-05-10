  <?php 
$userdata = $this->session->userdata('bj_login');
?>
  <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo base_url(); ?>assets/img/user_picture.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Wellcome</span>
              <h2><?php echo $userdata['nama'] ?></h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo site_url('/'); ?>biro_jasa"><i class="fa fa-dashboard"></i> Home </a>
                </li>
                <li><a href="<?php echo site_url('/'); ?>bj_profil"><i class="fa fa-user"></i> Profil </span></a>
                </li>
                <li><a href="<?php echo site_url('/'); ?>bj_bbn_satu"><i class="fa fa-user"></i> Pengurusan BBN 1 </span></a>
                </li>
                <li><a href="<?php echo site_url('/'); ?>bj_add_user"><i class="fa fa-user"></i> User </span></a>
                </li>
              </ul>
            </div>
            <div class="menu_section">
            </div>

          </div>

          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url(); ?>assets/img/user_picture.png" alt="..."><?php echo $userdata['nama'] ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="<?php echo site_url(); ?>/bj_profil">Profile</a>
                  </li>
                  <li><a href="<?php echo site_url(); ?>/login/logout_bj"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              

            </ul>
          </nav>
        </div>

      </div>

      <?php echo $content ?>