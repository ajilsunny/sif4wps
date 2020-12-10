<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo ">
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="feather icon-menu"></i>
</a>
<a href="">
<img class="img-fluid pl-4" src="<?php echo base_url() ?>assets/images/logo.png" alt="Theme-Logo" width="150px"/>
</a>
<a class="mobile-options">
<i class="feather icon-more-horizontal"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">
<!-- <li class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
 <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
<input type="text" class="form-control">
<span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
</div>
</div>
</li> -->
<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="feather icon-maximize full-screen"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="user-profile header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<img src="<?php echo base_url() ?>assets/images/social/profile.jpg" class="img-radius" alt="User-Profile-Image">
<span><?php echo $this->session->userdata('company_name'); ?></span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<!-- <li>
<a href="#!">
<i class="feather icon-settings"></i> Settings
</a>
</li> -->
<li>
<a href="<?php echo site_url('Profile') ?>">
<i class="feather icon-user"></i> Profile
</a>
</li>
<li>
<a href="<?php echo site_url('Logout') ?>">
<i class="feather icon-log-out"></i> Logout
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>

