<body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>AKTUALISASI</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="<?php echo asset('public/img/pp.jpg') ?>" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>M. Abdul Muhshi</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3></h3>
                                <ul class="nav side-menu" style="margin-top: 80px;">
                                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Infografis</a>
                                    </li>
                                    <li><a><i class="fa fa-table"></i> PST <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{url('pst')}}">Buku Tamu</a></li>
                                            <li><a href="{{url('pst/show')}}">Pengunjung</a></li>
                                            <li><a href="{{url('pst/skd')}}">SKD</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/pst/monitoring')}}"><i class="fa fa-bar-chart"></i> Monitoring</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="" alt="">
                                        
                                    </a>
                                    
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->