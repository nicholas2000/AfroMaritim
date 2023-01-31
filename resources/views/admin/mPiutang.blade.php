<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="sidebar.css">
<script src="sidebar.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="notif.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>

<body>

    <div class='dashboard'>
        <div class="dashboard-nav">
            <header><a href="#!" class="menu-toggle">
                <i class="fas fa-bars"></i></a><a href="#"
                    class="brand-logo"><i class="fa fa-line-chart"><img style="width: 50px;border-radius: 50%;"
                            src="logo.png" alt="" srcset=""></i> <span>Afro Maritim</span></a>

            </header>

            <nav class="dashboard-nav-list"><a href="/dashboard" class="dashboard-nav-item"><i class="fas fa-home"></i>
                Home </a>
            <div class='dashboard-nav-dropdown' style="background-color:#ec1d24"><a href="#!"
                    class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa fa-user-circle"></i>
                    Master </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="/masterCabang"class="dashboard-nav-dropdown-item">Master Cabang</a>
                    <a href="/masterCustomer"class="dashboard-nav-dropdown-item">Master Customer</a>
                    <a href="/masterKompetitor"class="dashboard-nav-dropdown-item">Master Kompetitor</a>
                    <a href="/masterPegawai"class="dashboard-nav-dropdown-item">Master Pegawai</a>

                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!"class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa fa-briefcase"></i> Transaksi</a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/masterTransaksi"class="dashboard-nav-dropdown-item">Transaksi</a>
                        <a href="/masterHistory"class="dashboard-nav-dropdown-item">History Transaksi</a>
                        <a href="/masterStatus"class="dashboard-nav-dropdown-item">Status Barang</a>
                    </div>
                </div>
                <div class='dashboard-nav-dropdown'>
                    <a href="#!"class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa fa-share"></i>Keuangan </a>
                    <div class='dashboard-nav-dropdown-menu'>

                        <a href="/masterPiutang"class="dashboard-nav-dropdown-item">Master Piutang</a>
                    </div>
                </div>
                <div class="nav-item-divider"></div>
                <a href="/" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <ul class="notificationsbtn nav navbar-nav navbar-right right">
                    <li id="notificationsli">
                        <a id="notifications" style="color:white" href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i>
                      <span class="noty-manager-bubble" style="margin-left: -2px; top: 10px; opacity: 1;">3</span></a>
                
                        <div id="notification-container" class="dropdown-menu" role="menu" aria-labelledby="drop3">
                
                            <section class="panel">
                                <header class="panel-heading">
                                    <strong>Notifications</strong>
                                </header>
                                <div id="notification-list" class="list-group list-group-alt">
                                  
                                  <div style=""><div class="noty-manager-list-item noty-manager-list-item-error"><div class="activity-item"> <i class="fa fa-shopping-cart text-success"></i> <div class="activity"> <a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a> <span>14 minutes ago</span> </div> </div></div></div>
                                  
                                  <div style=""><div class="noty-manager-list-item noty-manager-list-item-error"><div class="activity-item"> <i class="fa fa-shopping-cart text-success"></i> <div class="activity"> <a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a> <span>14 minutes ago</span> </div> </div></div></div>
                                  
                                  <div style=""><div class="noty-manager-list-item noty-manager-list-item-error"><div class="activity-item"> <i class="fa fa-shopping-cart text-success"></i> <div class="activity"> <a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a> <span>14 minutes ago</span> </div> </div></div></div>
                                  
                                  <div style=""><div class="noty-manager-list-item noty-manager-list-item-error"><div class="activity-item"> <i class="fa fa-shopping-cart text-success"></i> <div class="activity"> <a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a> <span>14 minutes ago</span> </div> </div></div></div>
                                  
                                  <div style=""><div class="noty-manager-list-item noty-manager-list-item-error"><div class="activity-item"> <i class="fa fa-shopping-cart text-success"></i> <div class="activity"> <a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a> <span>14 minutes ago</span> </div> </div></div></div>
                                  
                                </div>
                                <footer class="panel-footer">
                                    <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                                    <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                                </footer>
                            </section>
                
                        </div>
                    </li>
                </ul>
                            </header>
            </header>
            <div class='dashboard-content'>
                <div class='container'>
                    <div class='card-header'>
                        Welcome Admin
                    </div>
                    <div class='card-body'>
                        @include('form.formHutang')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    @yield('content')
