<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>
	
	$(function(){
    $("[data-toggle='tooltip']").tooltip();
})
	</script>
  <style>
	
body{
    background:#f9f9fb;    
}
.view-account{
    background:#FFFFFF; 
    margin-top:20px;
}
.view-account .pro-label {
    font-size: 13px;
    padding: 4px 5px;
    position: relative;
    top: -5px;
    margin-left: 10px;
    display: inline-block
}

.view-account .side-bar {
    padding-bottom: 30px
}

.view-account .side-bar .user-info {
    text-align: center;
    margin-bottom: 15px;
    padding: 30px;
    color: #616670;
    border-bottom: 1px solid #f3f3f3
}

.view-account .side-bar .user-info .img-profile {
    width: 120px;
    height: 120px;
    margin-bottom: 15px
}

.view-account .side-bar .user-info .meta li {
    margin-bottom: 10px
}

.view-account .side-bar .user-info .meta li span {
    display: inline-block;
    width: 100px;
    margin-right: 5px;
    text-align: right
}

.view-account .side-bar .user-info .meta li a {
    color: #616670
}

.view-account .side-bar .user-info .meta li.activity {
    color: #a2a6af
}

.view-account .side-bar .side-menu {
    text-align: center
}

.view-account .side-bar .side-menu .nav {
    display: inline-block;
    margin: 0 auto
}

.view-account .side-bar .side-menu .nav>li {
    font-size: 14px;
    margin-bottom: 0;
    border-bottom: none;
    display: inline-block;
    float: left;
    margin-right: 15px;
    margin-bottom: 15px
}

.view-account .side-bar .side-menu .nav>li:last-child {
    margin-right: 0
}

.view-account .side-bar .side-menu .nav>li>a {
    display: inline-block;
    color: #9499a3;
    padding: 5px;
    border-bottom: 2px solid transparent
}

.view-account .side-bar .side-menu .nav>li>a:hover {
    color: #616670;
    background: none
}

.view-account .side-bar .side-menu .nav>li.active a {
    color: #40babd;
    border-bottom: 2px solid #40babd;
    background: none;
    border-right: none
}

.theme-2 .view-account .side-bar .side-menu .nav>li.active a {
    color: #6dbd63;
    border-bottom-color: #6dbd63
}

.theme-3 .view-account .side-bar .side-menu .nav>li.active a {
    color: #497cb1;
    border-bottom-color: #497cb1
}

.theme-4 .view-account .side-bar .side-menu .nav>li.active a {
    color: #ec6952;
    border-bottom-color: #ec6952
}

.view-account .side-bar .side-menu .nav>li .icon {
    display: block;
    font-size: 24px;
    margin-bottom: 5px
}

.view-account .content-panel {
    padding: 30px
}

.view-account .content-panel .title {
    margin-bottom: 15px;
    margin-top: 0;
    font-size: 18px
}

.view-account .content-panel .fieldset-title {
    padding-bottom: 15px;
    border-bottom: 1px solid #eaeaf1;
    margin-bottom: 30px;
    color: #616670;
    font-size: 16px
}

.view-account .content-panel .avatar .figure img {
    float: right;
    width: 64px
}

.view-account .content-panel .content-header-wrapper {
    position: relative;
    margin-bottom: 30px
}

.view-account .content-panel .content-header-wrapper .actions {
    position: absolute;
    right: 0;
    top: 0
}

.view-account .content-panel .content-utilities {
    position: relative;
    margin-bottom: 30px
}

.view-account .content-panel .content-utilities .btn-group {
    margin-right: 5px;
    margin-bottom: 15px
}

.view-account .content-panel .content-utilities .fa {
    font-size: 16px;
    margin-right: 0
}

.view-account .content-panel .content-utilities .page-nav {
    position: absolute;
    right: 0;
    top: 0
}

.view-account .content-panel .content-utilities .page-nav .btn-group {
    margin-bottom: 0
}

.view-account .content-panel .content-utilities .page-nav .indicator {
    color: #a2a6af;
    margin-right: 5px;
    display: inline-block
}

.view-account .content-panel .mails-wrapper .mail-item {
    position: relative;
    padding: 10px;
    border-bottom: 1px solid #f3f3f3;
    color: #616670;
    overflow: hidden
}

.view-account .content-panel .mails-wrapper .mail-item>div {
    float: left
}

.view-account .content-panel .mails-wrapper .mail-item .icheck {
    background-color: #fff
}

.view-account .content-panel .mails-wrapper .mail-item:hover {
    background: #f9f9fb
}

.view-account .content-panel .mails-wrapper .mail-item:nth-child(even) {
    background: #fcfcfd
}

.view-account .content-panel .mails-wrapper .mail-item:nth-child(even):hover {
    background: #f9f9fb
}

.view-account .content-panel .mails-wrapper .mail-item a {
    color: #616670
}

.view-account .content-panel .mails-wrapper .mail-item a:hover {
    color: #494d55;
    text-decoration: none
}

.view-account .content-panel .mails-wrapper .mail-item .checkbox-container,
.view-account .content-panel .mails-wrapper .mail-item .star-container {
    display: inline-block;
    margin-right: 5px
}

.view-account .content-panel .mails-wrapper .mail-item .star-container .fa {
    color: #a2a6af;
    font-size: 16px;
    vertical-align: middle
}

.view-account .content-panel .mails-wrapper .mail-item .star-container .fa.fa-star {
    color: #f2b542
}

.view-account .content-panel .mails-wrapper .mail-item .star-container .fa:hover {
    color: #868c97
}

.view-account .content-panel .mails-wrapper .mail-item .mail-to {
    display: inline-block;
    margin-right: 5px;
    min-width: 120px
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject {
    display: inline-block;
    margin-right: 5px
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label {
    margin-right: 5px
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label:last-child {
    margin-right: 10px
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a,
.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a:hover {
    color: #fff
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-1 {
    background: #f77b6b
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-2 {
    background: #58bbee
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-3 {
    background: #f8a13f
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-4 {
    background: #ea5395
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-5 {
    background: #8a40a7
}

.view-account .content-panel .mails-wrapper .mail-item .time-container {
    display: inline-block;
    position: absolute;
    right: 10px;
    top: 10px;
    color: #a2a6af;
    text-align: left
}

.view-account .content-panel .mails-wrapper .mail-item .time-container .attachment-container {
    display: inline-block;
    color: #a2a6af;
    margin-right: 5px
}

.view-account .content-panel .mails-wrapper .mail-item .time-container .time {
    display: inline-block;
    text-align: right
}

.view-account .content-panel .mails-wrapper .mail-item .time-container .time.today {
    font-weight: 700;
    color: #494d55
}

.drive-wrapper {
    padding: 15px;
    background: #f5f5f5;
    overflow: hidden
}

.drive-wrapper .drive-item {
    width: 130px;
    margin-right: 15px;
    display: inline-block;
    float: left
}

.drive-wrapper .drive-item:hover {
    box-shadow: 0 1px 5px rgba(0, 0, 0, .1);
    z-index: 1
}

.drive-wrapper .drive-item-inner {
    padding: 15px
}

.drive-wrapper .drive-item-title {
    margin-bottom: 15px;
    max-width: 100px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.drive-wrapper .drive-item-title a {
    color: #494d55
}

.drive-wrapper .drive-item-title a:hover {
    color: #40babd
}

.theme-2 .drive-wrapper .drive-item-title a:hover {
    color: #6dbd63
}

.theme-3 .drive-wrapper .drive-item-title a:hover {
    color: #497cb1
}

.theme-4 .drive-wrapper .drive-item-title a:hover {
    color: #ec6952
}

.drive-wrapper .drive-item-thumb {
    width: 100px;
    height: 80px;
    margin: 0 auto;
    color: #616670
}

.drive-wrapper .drive-item-thumb a {
    -webkit-opacity: .8;
    -moz-opacity: .8;
    opacity: .8
}

.drive-wrapper .drive-item-thumb a:hover {
    -webkit-opacity: 1;
    -moz-opacity: 1;
    opacity: 1
}

.drive-wrapper .drive-item-thumb .fa {
    display: inline-block;
    font-size: 36px;
    margin: 0 auto;
    margin-top: 20px
}

.drive-wrapper .drive-item-footer .utilities {
    margin-bottom: 0
}

.drive-wrapper .drive-item-footer .utilities li:last-child {
    padding-right: 0
}

.drive-list-view .name {
    width: 60%
}

.drive-list-view .name.truncate {
    max-width: 100px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.drive-list-view .type {
    width: 15px
}

.drive-list-view .date,
.drive-list-view .size {
    max-width: 60px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.drive-list-view a {
    color: #494d55
}

.drive-list-view a:hover {
    color: #40babd
}

.theme-2 .drive-list-view a:hover {
    color: #6dbd63
}

.theme-3 .drive-list-view a:hover {
    color: #497cb1
}

.theme-4 .drive-list-view a:hover {
    color: #ec6952
}

.drive-list-view td.date,
.drive-list-view td.size {
    color: #a2a6af
}

@media (max-width:767px) {
    .view-account .content-panel .title {
        text-align: center
    }
    .view-account .side-bar .user-info {
        padding: 0
    }
    .view-account .side-bar .user-info .img-profile {
        width: 60px;
        height: 60px
    }
    .view-account .side-bar .user-info .meta li {
        margin-bottom: 5px
    }
    .view-account .content-panel .content-header-wrapper .actions {
        position: static;
        margin-bottom: 30px
    }
    .view-account .content-panel {
        padding: 0
    }
    .view-account .content-panel .content-utilities .page-nav {
        position: static;
        margin-bottom: 15px
    }
    .drive-wrapper .drive-item {
        width: 100px;
        margin-right: 5px;
        float: none
    }
    .drive-wrapper .drive-item-thumb {
        width: auto;
        height: 54px
    }
    .drive-wrapper .drive-item-thumb .fa {
        font-size: 24px;
        padding-top: 0
    }
    .view-account .content-panel .avatar .figure img {
        float: none;
        margin-bottom: 15px
    }
    .view-account .file-uploader {
        margin-bottom: 15px
    }
    .view-account .mail-subject {
        max-width: 100px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }
    .view-account .content-panel .mails-wrapper .mail-item .time-container {
        position: static
    }
    .view-account .content-panel .mails-wrapper .mail-item .time-container .time {
        width: auto;
        text-align: left
    }
}

@media (min-width:768px) {
    .view-account .side-bar .user-info {
        padding: 0;
        padding-bottom: 15px
    }
    .view-account .mail-subject .subject {
        max-width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }
}

@media (min-width:992px) {
    .view-account .content-panel {
        min-height: 800px;
        border-left: 1px solid #f3f3f7;
        margin-left: 200px
    }
    .view-account .mail-subject .subject {
        max-width: 280px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }
    .view-account .side-bar {
        position: absolute;
        width: 200px;
        min-height: 600px
    }
    .view-account .side-bar .user-info {
        margin-bottom: 0;
        border-bottom: none;
        padding: 30px
    }
    .view-account .side-bar .user-info .img-profile {
        width: 120px;
        height: 120px
    }
    .view-account .side-bar .side-menu {
        text-align: left
    }
    .view-account .side-bar .side-menu .nav {
        display: block
    }
    .view-account .side-bar .side-menu .nav>li {
        display: block;
        float: none;
        font-size: 14px;
        border-bottom: 1px solid #f3f3f7;
        margin-right: 0;
        margin-bottom: 0
    }
    .view-account .side-bar .side-menu .nav>li>a {
        display: block;
        color: #9499a3;
        padding: 10px 15px;
        padding-left: 30px
    }
    .view-account .side-bar .side-menu .nav>li>a:hover {
        background: #f9f9fb
    }
    .view-account .side-bar .side-menu .nav>li.active a {
        background: #f9f9fb;
        border-right: 4px solid #40babd;
        border-bottom: none
    }
    .theme-2 .view-account .side-bar .side-menu .nav>li.active a {
        border-right-color: #6dbd63
    }
    .theme-3 .view-account .side-bar .side-menu .nav>li.active a {
        border-right-color: #497cb1
    }
    .theme-4 .view-account .side-bar .side-menu .nav>li.active a {
        border-right-color: #ec6952
    }
    .view-account .side-bar .side-menu .nav>li .icon {
        font-size: 24px;
        vertical-align: middle;
        text-align: center;
        width: 40px;
        display: inline-block
    }
}
.module {
    border: 1px solid #f3f3f3;
    border-bottom-width: 2px;
    background: #fff;
    margin-bottom: 30px;
    position: relative;
    border-radius: 4px;
    background-clip: padding-box;
}
.module .module-footer {
    background: #fff;
    border-top: 1px solid #f3f3f7;
    padding: 15px;
}
.module .module-footer a {
    color: #9499a3;
}
	
	</style>
  <title>CMS - stock</title>
  <meta name="description" content="cms" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../assets/images/logo.png">
  <meta name="apple-mobile-web-app-title">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="../assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="../assets/styles/font.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal nav-dropdown">
  	<!-- fluid app aside -->
    <div class="left navside dark dk" data-layout="column">
  	  <div class="navbar no-radius" style="padding-top: 22px">
        <!-- brand -->
        <a class="navbar-brand" href="dashboard.php">
        	<img src="../assets/images/logo.png" alt="">
        	<span class="hidden-folded inline" style="font-size: 22px">CMS</span>
        </a>
        <!-- / brand -->
      </div>
      <div class="hide-scroll" data-flex>
          <nav class="scroll nav-light">
            
              <ul class="nav" ui-nav>
                <br>
                <li>
                  <a href="dashboard.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'../assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Dashboard</span>
                  </a>
                </li>
            
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe429;
                        <span ui-include="'../assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Configure</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="area.php" >
                        <span class="nav-text">Area</span>
                      </a>
                    </li>
                    <li>
                      <a href="user.php" >
                        <span class="nav-text">User</span>
                      </a>
                    </li>
                     <li>
                      <a href="pack.php" >
                        <span class="nav-text">Pack</span>
                      </a>
                    </li>
                    <li>
                      <a href="item.php" >
                        <span class="nav-text">Item</span>
                      </a>
                    </li>
                     <li>
                      <a href="itemType.php" >
                        <span class="nav-text">Item Type</span>
                      </a>
                    </li>
                  </ul>
                </li>
            
                <li>
                  <a href="customer.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe851;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Customer</span>
                  </a>
                </li>
            
                <li>
                  <a href="stock.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe547;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Stock</span>
                  </a>
                </li>
            
            
                <li>
                  <a href="expenses.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe01d;
                        <span ui-include="'../assets/images/i_4.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Expenses</span>
                  </a>
                </li>
            
                <li>
                  <a href="profit.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe227;
                        <span ui-include="'../assets/images/i_5.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Profit</span>
                  </a>
                </li>
            
                <li>
                  <a href="income.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe39e;
                        <span ui-include="'../assets/images/i_6.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Income</span>
                  </a>
                </li>
            
                <li>
                  <a href="credits.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe870;
                        <span ui-include="'../assets/images/i_7.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Credits</span>
                  </a>
                </li>
            
              </ul>
          </nav>
      </div>
      <div class="b-t">
        <div class="nav-fold">
        	<a href="profile.php">
        	    <span class="pull-left">
        	      <img src="../assets/images/a0.jpg" alt="..." class="w-40 img-circle">
        	    </span>
        	    <span class="clear hidden-folded p-x">
        	      <span class="block _500">CMS - Admin</span>
        	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
        	    </span>
        	</a>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow" style="background-color: #8A8282">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->
        
            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>
        
            <!-- navbar right -->
            <ul class="nav navbar-nav ml-auto flex-row">
              <li class="nav-item dropdown">
                <a class="nav-link p-0 clear" href="profile.php">
                  <span class="avatar w-32">
                    <img src="../assets/images/logo.png" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div ui-include="'../views/blocks/dropdown.user.html'"></div>
              </li>
            </ul>
            <!-- / navbar right -->
        </div>
    </div>
    <div class="app-footer">
      <div class="p-2 text-xs">
        <div class="pull-right text-muted py-1">
          &copy; 2019 CMS. All Rights Reserved<span class="hidden-xs-down"> | Powered by <a href="http://infinisolutionslk.com/" target="_blank">Infini Solutions</a></span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

      <!-- ############ PAGE START-->
	  <h1>Customer Details</h1>
    	<!---->
    	<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
                        <img class="img-profile img-circle img-responsive center-block" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                        <ul class="meta list list-unstyled">
                            <li class="name">Sachitha Hirushan
                                <label class="label label-info">488</label>
                            </li>
                            <li class="email"><a href="#">shpsachitha@gmail.com</a></li>
                            <li class="activity">Last logged in: Today at 2:18pm</li>
                        </ul>
                    </div>
                    <nav class="side-menu">
                        <ul class="nav">
                            <li><a href="#"><span class="fa fa-user"></span> Profile</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Settings</a></li>
                            <li class="active"><a href="#"><span class="fa fa-credit-card"></span> Billing</a></li>
                            <li><a href="#"><span class="fa fa-envelope"></span> Messages</a></li>

                            <li><a href="user-drive.html"><span class="fa fa-th"></span> Drive</a></li>
                            <li><a href="#"><span class="fa fa-clock-o"></span> Reminders</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="content-panel">
                    <div class="content-header-wrapper">
                        <h2 class="title">My Drive</h2>
                        
                    </div>
                    <div class="content-utilities">
                        
                        <div class="actions">
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">All Items <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-file"></i> Documents</a></li>
                                    <li><a href="#"><i class="fa fa-file-image-o"></i> Images</a></li>
                                    <li><a href="#"><i class="fa fa-file-video-o"></i> Media Files</a></li>
                                    <li><a href="#"><i class="fa fa-folder"></i> Folders</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false"><i class="fa fa-filter"></i> Sorting <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Newest first</a></li>
                                    <li><a href="#">Oldest first</a></li>
                                </ul>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Archive"><i class="fa fa-archive"></i></button>

                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Report spam"><i class="fa fa-exclamation-triangle"></i></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="drive-wrapper drive-grid-view">
                        <div class="grid-items-wrapper">
                            
                            
                            
                           
                            
                            
                            
                           
                           
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Image DS2314.JPG</a></div>
                                    <div class="drive-item-thumb">
<!--                                        <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>-->
                                   147
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="drive-wrapper drive-list-view">
                        <div class="table-responsive drive-items-table-wrapper">
                            <table class="table">
                                <thead>
                                    
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                   
                                   
                                   
                                    
                                    <tr>
                                        <td class="type"><i class="fa fa-file-code-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">demo.html</a></td>
                                        <td class="date">Aug 23, 2014</td>
                                        <td class="size">10 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-image-o text-success"></i></td>
                                        <td class="name truncate"><a href="#">Image DS2314.JPG</a></td>
                                        <td class="date">Aug 06, 2014</td>
                                        <td class="size">325 MB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
    	<!---->


      <!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="../libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="../libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="../libs/jquery/underscore/underscore-min.js"></script>
  <script src="../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="../libs/jquery/PACE/pace.min.js"></script>

  <script src="scripts/config.lazyload.js"></script>

  <script src="scripts/palette.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>

  <script src="scripts/app.js"></script>
  <script src="scripts/cMain.js"></script>

  <!-- ajax -->
  <script src="../libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->
<script >
	
</script>
</body>
</html>
