<body class="theme-orange">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="public/assets/images/logo.svg" width="68" height="68" alt="Boshop"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="?mod=index"><img src="public/assets/images/logo.svg" width="150" alt="Compass"></a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
            <li class="hidden-sm-down">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-search"></i>
                    </span>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-menu-right slideDown">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                    <div class="menu-info">
                                        <h4>8 New Members joined</h4>
                                        <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
                                    <div class="menu-info">
                                        <h4>4 Sales made</h4>
                                        <p> <i class="zmdi zmdi-time"></i> 22 mins ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                    <div class="menu-info">
                                        <h4><b>Nancy Doe</b> Deleted account</h4>
                                        <p> <i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div>
                                    <div class="menu-info">
                                        <h4><b>Nancy</b> Changed name</h4>
                                        <p> <i class="zmdi zmdi-time"></i> 2 hours ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-grey"><i class="zmdi zmdi-comment-text"></i></div>
                                    <div class="menu-info">
                                        <h4><b>John</b> Commented your post</h4>
                                        <p> <i class="zmdi zmdi-time"></i> 4 hours ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-purple"><i class="zmdi zmdi-refresh"></i></div>
                                    <div class="menu-info">
                                        <h4><b>John</b> Updated status</h4>
                                        <p> <i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-light-blue"><i class="zmdi zmdi-settings"></i></div>
                                    <div class="menu-info">
                                        <h4>Settings Updated</h4>
                                        <p> <i class="zmdi zmdi-time"></i> Yesterday </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            </li>
            <li><a href="?mod=logout" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#"><img src="public/assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4><?php echo strtoupper($_SESSION['admin']['username']); ?></h4>
                        <small>Welcome to BoShop management</small>
                    </div>
                </div>
            </li>
            <li class="header">MAIN</li>
            <?php
            //get mod and get echo active
            $mod = isset($_GET['mod']) ? $_GET['mod'] : "";
            $act = isset($_GET['act']) ? $_GET['act'] : "";
            ?>
            <li <?php if ($mod == 'index' || $mod == "") echo 'class="active"';?>> <a href="?mod=index" ><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li <?php if ($mod == "log") echo 'class="active"'; ?> > <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">timeline</i><span>Ho???t ?????ng H??? Th???ng</span> </a>
                <ul class="ml-menu">
                    <li <?php if (($mod == "log" && $act == 'general') || ($mod == "log" && $act == "")) echo 'class="active"'; ?> > <a href="?mod=log">Ho???t ?????ng Qu???n L??</a> </li>
                    <li <?php if ($mod == "log" && $act == 'customer') echo 'class="active"'; ?> > <a href="?mod=log&act=customer">Ho???t ?????ng Kh??ch H??ng</a> </li>
                    <li <?php if ($mod == "log" && $act == 'order') echo 'class="active"'; ?> > <a href="?mod=log&act=order">L???ch S??? ?????t H??ng</a> </li>
                    <li <?php if ($mod == "log" && $act == 'coupon') echo 'class="active"'; ?> > <a href="?mod=log&act=coupon">L???ch S??? D??ng Coupon</a> </li>
                </ul>
            </li>
            <li class="header">QU???N L?? C???A H??NG</li>
            <li <?php if ($mod == "product") echo 'class="active"'; ?> > <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">store</i><span>Qu???n L?? S???n Ph???m</span></a>
                <ul class="ml-menu">
                    <li <?php if (($mod == "product" && $act == "list") || ($mod == "product" && $act == "")) echo 'class="active"'; ?>> <a href="?mod=product">Danh S??ch S???n Ph???m</a> </li>
                    <li <?php if ($mod == "product" && $act == 'add') echo 'class="active"'; ?> > <a href="?mod=product&act=add">Th??m M???i S???n Ph???m</a> </li>
                </ul>
            </li>
            <li <?php if ($mod == "category") echo 'class="active"'; ?> > <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">label</i><span>Qu???n L?? Danh M???c</span></a>
                <ul class="ml-menu">
                    <li <?php if (($mod == "category" && $act == "list") || ($mod == "category" && $act == "")) echo 'class="active"'; ?>> <a href="?mod=category">Danh S??ch Danh M???c</a> </li>
                    <li <?php if ($mod == "category" && $act == 'add') echo 'class="active"'; ?> > <a href="?mod=category&act=add">Th??m M???i Danh M???c</a> </li>
                </ul>
            </li>
            <li <?php if ($mod == "customer") echo 'class="active"'; ?> > <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">people</i><span>Qu???n L?? Kh??ch H??ng</span></a>
                <ul class="ml-menu">
                    <li <?php if (($mod == "customer" && $act == "list") || ($mod == "customer" && $act == "")) echo 'class="active"'; ?>> <a href="?mod=customer">Danh S??ch Kh??ch H??ng</a> </li>
                    <li <?php if ($mod == "customer" && $act == 'add') echo 'class="active"'; ?> > <a href="?mod=customer&act=add">Th??m M???i Kh??ch H??ng</a> </li>
                </ul>
            </li>
            <li <?php if ($mod == "bill") echo 'class="active"'; ?> > <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">shopping_basket</i><span>Qu???n L?? ????n H??ng</span></a>
                <ul class="ml-menu">
                    <li <?php if (($mod == "bill" && $act == "list") || ($mod == "bill" && $act == "")) echo 'class="active"'; ?>> <a href="?mod=bill">Danh S??ch ????n H??ng</a> </li>
                </ul>
            </li>
            <li <?php if ($mod == "feedback") echo 'class="active"'; ?> > <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">comment</i><span>Qu???n L?? Ph???n H???i</span></a>
                <ul class="ml-menu">
                    <li <?php if (($mod == "feedback" && $act == "list") || ($mod == "feedback" && $act == "")) echo 'class="active"'; ?>> <a href="?mod=feedback">Danh S??ch Ph???n H???i</a> </li>
                </ul>
            </li>
            <li <?php if ($mod == "payment") echo 'class="active"'; ?> > <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">payment</i><span>Qu???n L?? PTTT</span></a>
                <ul class="ml-menu">
                    <li <?php if (($mod == "payment" && $act == "list") || ($mod == "payment" && $act == "")) echo 'class="active"'; ?>> <a href="?mod=payment">Danh S??ch PTTT</a> </li>
                    <li <?php if ($mod == "payment" && $act == 'add') echo 'class="active"'; ?> > <a href="?mod=payment&act=add">Th??m M???i PTTT</a> </li>
                </ul>
            </li>
            <li <?php if ($mod == "coupon") echo 'class="active"'; ?> > <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">confirmation_number</i><span>Qu???n L?? M?? Gi???m Gi??</span></a>
                <ul class="ml-menu">
                    <li <?php if (($mod == "coupon" && $act == "list") || ($mod == "coupon" && $act == "")) echo 'class="active"'; ?>> <a href="?mod=coupon">Danh S??ch M?? Gi???m Gi??</a> </li>
                    <li <?php if ($mod == "coupon" && $act == 'add') echo 'class="active"'; ?> > <a href="?mod=coupon&act=add">Th??m M???i M?? Gi???m Gi??</a> </li>
                </ul>
            </li>
            <li <?php if ($mod == "color") echo 'class="active"'; ?> > <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">format_color_fill</i><span>Qu???n L?? M??u S???c</span></a>
                <ul class="ml-menu">
                    <li <?php if (($mod == "color" && $act == "list") || ($mod == "color" && $act == "")) echo 'class="active"'; ?>> <a href="?mod=color">Danh S??ch M??u S???c</a> </li>
                    <li <?php if ($mod == "color" && $act == 'add') echo 'class="active"'; ?> > <a href="?mod=color&act=add">Th??m M???i M??u S???n Ph???m</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
