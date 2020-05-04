<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            
    <!-- Title -->
    <title>concept - Responsive Admin Dashboard Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/plugins/switchery/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/plugins/icomoon/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/plugins/font-awesome/css/all.min.css') }}">
          
    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/style.css') }}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
                                        
Body

<body>
        
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar">
            <div class="profile-menu">
                <a href="app-profile.html">
                    <img src="../../assets/images/avatars/avatar1.png" alt="">
                </a>
            </div>
            <div class="page-sidebar-inner">
                <div class="page-sidebar-menu">
                    <ul>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Dashboard"><i class="fas fa-rocket"></i></a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="News"><i class="fas fa-globe-africa"></i></a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Inbox"><i class="fas fa-inbox"></i></a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Chat"><i class="far fa-comments"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="settings-menu-btn">
                <a href="#" class="settings-menu-link"><i class="fas fa-wrench"></i></a>
            </div>
        </div><!-- /Page Sidebar -->
        <div class="settings-sidebar">
            <div class="settings-sidebar-content">
                <div class="settings-sidebar-header">
                    <span>Settings</span>
                    <a href="javascript: void(0);" class="settings-menu-close"><i class="icon-close"></i></a>
                </div>
                <div class="right-sidebar-settings">
                    <span class="settings-title">General Settings</span>
                    <ul class="sidebar-setting-list list-unstyled">
                        <li>
                            <span class="settings-option">Notifications</span><input type="checkbox" class="js-switch" checked />
                        </li>
                        <li>
                            <span class="settings-option">Activity log</span><input type="checkbox" class="js-switch" checked />
                        </li>
                        <li>
                            <span class="settings-option">Automatic updates</span><input type="checkbox" class="js-switch" />
                        </li>
                        <li>
                            <span class="settings-option">Allow backups</span><input type="checkbox" class="js-switch" />
                        </li>
                    </ul>
                    <span class="settings-title">Account Settings</span>
                    <ul class="sidebar-setting-list list-unstyled">
                        <li>
                            <span class="settings-option">Chat</span><input type="checkbox" class="js-switch" checked />
                        </li>
                        <li>
                            <span class="settings-option">Incognito mode</span><input type="checkbox" class="js-switch" />
                        </li>
                        <li>
                            <span class="settings-option">Public profile</span><input type="checkbox" class="js-switch" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="settings-overlay"></div>
        <!-- Page Content -->
        <div class="page-content">
            <div class="secondary-sidebar">
                <div class="secondary-sidebar-bar">
                    <a href="#" class="logo-box">concept</a>
                </div>
                <div class="secondary-sidebar-menu">
                    <ul class="accordion-menu">
                        <li>
                            <a href="index.html">
                                <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon icon-apps"></i><span>Apps</span><i class="accordion-icon fas fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="app-mailbox.html">Mailbox</a></li>
                                <li><a href="app-todo.html">Todo</a></li>
                                <li><a href="app-contacts.html">Contacts</a></li>
                                <li><a href="app-profile.html">Profile</a></li>
                            </ul>
                        </li>
                        <li class="active-page">
                            <a href="javascript:void(0)">
                                <i class="menu-icon icon-layers"></i><span>Layouts</span><i class="accordion-icon fas fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="layout-blank.html" class="active">Blank Page</a></li>
                                <li><a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a></li>
                                <li><a href="layout-fixed-header.html">Fixed Header</a></li>
                                <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                                <li><a href="layout-fixed-sidebar-header.html">Fixed Sidebar & Header</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon icon-brush"></i><span>Styles</span><i class="accordion-icon fas fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="style-typography.html">Typography</a></li>
                                <li><a href="style-code.html">Code</a></li>
                                <li><a href="style-tables.html">Tables</a></li>
                                <li><a href="style-icons.html">Icons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon icon-flash_on"></i><span>Components</span><i class="accordion-icon fas fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="comp-alerts.html">Alerts</a></li>
                                <li><a href="comp-badge.html">Badge</a></li>
                                <li><a href="comp-breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="comp-buttons.html">Buttons</a></li>
                                <li><a href="comp-btn-group.html">Button Group</a></li>
                                <li><a href="comp-card.html">Card</a></li>
                                <li><a href="comp-collapse.html">Collapse</a></li>
                                <li><a href="comp-dropdowns.html">Dropdowns</a></li>
                                <li><a href="comp-lists.html">List Group</a></li>
                                <li><a href="comp-media-object.html">Media Object</a></li>
                                <li><a href="comp-modal.html">Modal</a></li>
                                <li><a href="comp-navs.html">Navs</a></li>
                                <li><a href="comp-navbar.html">Navbar</a></li>
                                <li><a href="comp-pagination.html">Pagination</a></li>
                                <li><a href="comp-popovers.html">Popovers</a></li>
                                <li><a href="comp-progress.html">Progress</a></li>
                                <li><a href="comp-spinners.html">Spinners</a></li>
                                <li><a href="comp-toasts.html">Toasts</a></li>
                                <li><a href="comp-tooltips.html">Tooltips</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon icon-code"></i><span>Forms</span><i class="accordion-icon fas fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-image-crop.html">Image Crop</a></li>
                                <li><a href="form-image-zoom.html">Image Zoom</a></li>
                                <li><a href="form-select2.html">Select2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="charts.html">
                                <i class="menu-icon icon-show_chart"></i><span>Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon icon-star"></i><span>Pages</span><i class="accordion-icon fas fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="500.html">500 Page</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="help-center.html">Help Center</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            </ul>
                        </li>
                        <li class="menu-divider"></li>
                        <li>
                            <a href="#">
                                <i class="menu-icon icon-help_outline"></i><span>Documentation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="menu-icon icon-public"></i><span>Changelog</span><span class="badge badge-danger">1.0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page Header -->
            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <nav class="navbar navbar-default navbar-expand-md">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="logo-sm">
                                <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fas fa-bars"></i></a>
                                <a class="logo-box" href="index.html"><span>concept</span></a>
                            </div>
                            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <i class="fas fa-angle-down"></i>
                            </button>
                        </div>
                            
                        <!-- Collect the nav links, forms, and other content for toggling -->
                            
                        <div class="collapse navbar-collapse justify-content-between" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav mr-auto">
                                <li class="collapsed-sidebar-toggle-inv"><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fas fa-bars"></i></a></li>
                                <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fas fa-expand"></i></a></li>
                                <li><a href="javascript:void(0)" id="search-button"><i class="fas fa-search"></i></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-md-block"><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fas fa-envelope"></i></a></li>
                            <li class="dropdown nav-item d-md-block">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-lg dropdown-content">
                                    <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fas fa-angle-right"></i></a></li>
                                    <li class="slimscroll dropdown-notifications">
                                        <ul class="list-unstyled dropdown-oc">
                                            <li>
                                                <a href="#"><span class="notification-badge bg-info"><i class="fas fa-at"></i></span>
                                                    <span class="notification-info">
                                                        <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5"</span>
                                                        <small class="notification-date">06:07</small>
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="notification-badge bg-danger"><i class="fas fa-bolt"></i></span>
                                                    <span class="notification-info">
                                                        <span class="notification-info">4 new special offers from the apps you follow!</span>
                                                        <small class="notification-date">Yesterday</small>
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="notification-badge bg-success"><i class="fas fa-bullhorn"></i></span>
                                                    <span class="notification-info">
                                                        <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!</span>
                                                        <small class="notification-date">Yesterday</small>
                                                    </span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown nav-item d-md-block">
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/avatars/avatar1.png" alt="" class="rounded-circle"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Calendar</a></li>
                                    <li><a href="#"><span class="badge float-right badge-info">64</span>Messages</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li><a href="#">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.container-fluid -->
                </nav>
            </div><!-- /Page Header -->
            <!-- Page Inner -->
            <div class="page-inner no-page-title">
                <div id="main-wrapper">
                    <div class="content-header">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-style-1">
                                <li class="breadcrumb-item"><a href="#">Layouts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blank Layout</li>
                            </ol>
                        </nav>
                        <h1 class="page-title">Page Title</h1>
                    </div>
                            
                </div><!-- Main Wrapper -->         

                    
                <div class="page-footer">
                    <p>Made with <i class="heart"></i> by stacks</p>
                </div>
            </div><!-- /Page Inner -->
            <div class="page-right-sidebar" id="main-right-sidebar">
                <div class="page-right-sidebar-inner">
                    <div class="right-sidebar-top">
                        <span class="chat-header">Chat</span>
                        <a href="javascript:void(0)" class="right-sidebar-toggle right-sidebar-close" data-sidebar-id="main-right-sidebar"><i class="icon-  close"></i></a>
                    </div>
                    <div class="right-sidebar-content">
                        <!-- Tab panes -->
                        <div class="chat-list">
                            <span class="chat-title">Recent</span>
                            <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread" data-sidebar-id="chat-right-sidebar">
                                <div class="user-avatar">
                                    <img src="../../assets/images/avatars/avatar1.png" alt="">
                                </div>
                                <div class="chat-info">
                                    <span class="chat-author">David</span>
                                    <span class="chat-text">Hello there!</span>
                                    <span class="chat-time">16:20</span>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread active-user" data-sidebar-id="chat-right-sidebar">
                                <div class="user-avatar">
                                    <img src="../../assets/images/avatars/avatar2.png" alt="">
                                </div>
                                <div class="chat-info">
                                    <span class="chat-author">Bob</span>
                                    <span class="chat-text">Hello there!</span>
                                    <span class="chat-time">11:34</span>
                                </div>
                            </a>
                        </div>
                        <div class="chat-list">
                            <span class="chat-title">Older</span>
                            <a href="javascript:void(0);" class="right-sidebar-toggle chat-item" data-sidebar-id="chat-right-sidebar">
                                <div class="user-avatar">
                                    <img src="../../assets/images/avatars/avatar3.png" alt="">
                                </div>
                                <div class="chat-info">
                                    <span class="chat-author">Tom</span>
                                    <span class="chat-text">Hello there!</span>
                                    <span class="chat-time">2d</span>
                                </div>
                                        </a>
                            <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                <div class="user-avatar">
                                    <img src="../../assets/images/avatars/avatar4.png" alt="">
                                </div>
                                <div class="chat-info">
                                    <span class="chat-author">Anna</span>
                                    <span class="chat-text">Hello there!</span>
                                    <span class="chat-time">4d</span>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                <div class="user-avatar">
                                    <img src="../../assets/images/avatars/avatar5.png" alt="">
                                </div>
                                <div class="chat-info">
                                    <span class="chat-author">Noah</span>
                                    <span class="chat-text">Hello there!</span>
                                    <span class="chat-time"> </span>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="load-more-messages"  data-toggle="tooltip" data-placement="bottom" title="Load More">•••</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-right-sidebar" id="chat-right-sidebar">
                <div class="page-right-sidebar-inner">
                    <div class="right-sidebar-top">
                        <div class="chat-top-info">
                            <span class="chat-name">Noah</span>
                            <span class="chat-state">2h ago</span>
                        </div>
                        <a href="javascript:void(0)" class="right-sidebar-toggle chat-sidebar-close float-right" data-sidebar-id="chat-right-sidebar"><i class="icon-keyboard_arrow_right"></i></a>
                    </div>
                    <div class="right-sidebar-content">
                        <div class="right-sidebar-chat slimscroll">
                            <div class="chat-bubbles">
                                <div class="chat-start-date">02/06/2017 5:58PM</div>
                                <div class="chat-bubble them">
                                    <div class="chat-bubble-img-container">
                                        <img src="../../assets/images/avatars/avatar1.png" alt="">
                                    </div>
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">Hello</span>
                                    </div>
                                </div>
                                <div class="chat-bubble me">
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">Hello!</span>
                                    </div>
                                </div>
                                <div class="chat-start-date">03/06/2017 4:22AM</div>
                                <div class="chat-bubble me">
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">lorem</span>
                                    </div>
                                </div>
                                <div class="chat-bubble them">
                                    <div class="chat-bubble-img-container">
                                        <img src="../../assets/images/avatars/avatar1.png" alt="">
                                    </div>
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">ipsum dolor sit amet</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-write">
                            <form class="form-horizontal" action="javascript:void(0);">
                                <input type="text" class="form-control" placeholder="Say something">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /Page Content -->
    </div><!-- /Page Container -->
    
        
    <!-- Javascripts -->

</body>