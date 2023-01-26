<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="sidebar.css">
<script src="sidebar.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
            <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#"
                    class="brand-logo"><i class="fa fa-line-chart"><img style="width: 50px;border-radius: 50%;"
                            src="paperusLogo.jpg" alt="" srcset=""></i> <span>PAPERUS.ID</span></a>
            </header>
            <nav class="dashboard-nav-list"><a href="/dashboard" class="dashboard-nav-item"><i class="fas fa-home"></i>
                    Home </a>
                <div class='dashboard-nav-dropdown' style="background-color:#ec1d24"><a href="#!"
                        class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa fa-user-circle"></i>
                        Master </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="/masterPegawai"class="dashboard-nav-dropdown-item">Master Pegawai</a>
                        <a href="/masterCustomer"class="dashboard-nav-dropdown-item">Master Customer</a>
                        <a href="/masterSupplier"class="dashboard-nav-dropdown-item">Master Supplier</a>
                        <a href="/masterBox"class="dashboard-nav-dropdown-item">Master Box</a>

                    </div>
                    <div class='dashboard-nav-dropdown'>
                        <a href="#!"class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa fa-briefcase"></i> Item</a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="/masterStock"class="dashboard-nav-dropdown-item">Kartu Stock</a>
                        </div>
                    </div>
                    <div class='dashboard-nav-dropdown'>
                        <a href="#!"class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa fa-share"></i>Processing </a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="/masterPenawaran"class="dashboard-nav-dropdown-item">Form Penawaran</a>
                            <a href="/historypenawaran"class="dashboard-nav-dropdown-item">History Penawaran</a>
                            <a href="/masterPo"class="dashboard-nav-dropdown-item"> Form PO</a>
                            <a href="/masterPenerimaanbarang"class="dashboard-nav-dropdown-item"> Form Penerimaan Barang</a>
                            <a href=""class="dashboard-nav-dropdown-item"> Form Processing 1</a>
                            <a href=""class="dashboard-nav-dropdown-item"> Form Processing 2</a>
                            <a href=""class="dashboard-nav-dropdown-item"> Form Processing 3</a>
                            <a href=""class="dashboard-nav-dropdown-item"> Form Processing 4</a>
                            <a href=""class="dashboard-nav-dropdown-item"> Form Processing 5</a>
                            <a href=""class="dashboard-nav-dropdown-item"> Form Processing 6</a>
                            <a href=""class="dashboard-nav-dropdown-item"> Form Processing 7</a>
                            <a href="/tambahsuratjalan"class="dashboard-nav-dropdown-item"> Form Pengiriman Barang</a>
                            <a href=""class="dashboard-nav-dropdown-item"> Invoice</a>
                        </div>
                    </div>

                    <div class="nav-item-divider"></div>
                    <a href="/" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            </header>
            <div class='dashboard-content'>
                <div class='container'>
                    <div class='card-header'>
                        Welcome Admin
                    </div>
                    <div class='card-body'>
                        @include('form.formAddboxmodel')
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
