
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="notif.css">
<link rel="stylesheet" href="sidebar2.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Detect.js/2.2.2/detect.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<style>
    @media screen and (max-width:600px) {

        .t {
            margin-left: 40%;
            font-size: 15px;
        }

        .burger {
            margin-left: 20%;
        }

        .p {
            margin-right: -80%;
        }
    }
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>

</head>

<body>

    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <div class="sidebar-header">
                    <div class="sidebar-brand">
                        <i class=""><img style="width: 75px;border-radius: 50%;" src="logo.png" alt=""
                                srcset=""></i>
                        <br>
                        <span style="font-size: 20px;color: white;">Afro Trans Maritim</span>
                    </div>
                </div>
                <li><a href="{{ url('/dashboard') }}"><i class="fas fa-home"></i>Home </a>
                </li>
                <li><a href="{{ url('/formactivity') }}"><i class="fa fa-book"></i>Activity
                    </a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="fa fa-user-circle"></i>Master </a>
                    <ul class="dropdown-menu animated fadeInLeft" role="menu">
                        <li style="margin-top:5px;"> <a href="{{ url('/masterCabang') }}">Master Cabang</a></li>
                        <li><a href="{{ url('/masterPegawai') }}">Master Pegawai</a></li>
                        <li><a href="{{ url('/masterCustomer') }}">Master Customer</a></li>
                        <li><a href="{{ url('/masterKompetitor') }}">Master Kompetitor</a></li>
                        <li><a href="{{ url('/masterJenisharga') }}">Master Jenis Harga</a></li>
                        <li style="margin-bottom: 5px;"><a
                                href="{{ url('/masterContainer') }}"class="dashboard-nav-dropdown-item">Master
                                Container</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="fas fa-exchange-alt"></i>Transaksi </a>
                    <ul class="dropdown-menu animated fadeInLeft" role="menu">
                        <li style="margin-top:5px;"><a href="{{ url('/depo') }}">Depo</a></li>
                        <li><a href="{{ url('/masterTransaksi') }}">Transaksi</a></li>
                        <li><a href="{{ url('/masterHistory') }}">History Transaksi</a></li>
                        <li><a href="{{ url('/masterStatus') }}">Status Barang</a></li>
                        {{-- <li style="line-height:15px;"><a href="{{ url('/masterTeam') }}">Master Team Pengiriman</a>
                        </li> --}}
                        <li style="margin-bottom: 5px;"><a href="{{ url('/masterpengirimansatu') }}">Pengiriman
                                Kurir</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="far fa-money-bill-alt"></i>Keuangan </a>
                    <ul class="dropdown-menu animated fadeInLeft" role="menu">
                        <li style="margin-top:5px;margin-bottom: 5px;"><a href="{{ url('/masterPiutang') }}">Master
                                Piutang</a></li>
                    </ul>
                </li>
                <li>
                    <form action="{{ url('/logout') }}">
                        <input type="hidden" name="device">
                        <button style="height:100%;width: 100%;background-color: transparent;border:none;color:white;margin-left:-38px;"><i
                                class="fas fa-sign-out-alt"></i>Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"></a>

            <div class="t">
                <div style="color: black;font-size: 80%;margin-left: 1%;padding-top: 25px;width: 100%;text-align:center"
                    id="myDiv"></div>
                <ul class="notification-drop right p t">
                    <li class="item">
                        <span class="btn__badge pulse-button " style="">4</span>
                        <i class="fa fa-bell notification-bell dashboard-toolbar" style="text-align:right;"
                            aria-hidden="true"></i>
                        <ul>
                            <li>First Item</li>
                            <li>Second Item</li>
                            <li>Third Item</li>
                        </ul>
                    </li>
                </ul>
            </div>

        </header>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed burger" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-2">
                        <div style="background: rgb(190, 180, 180);width: 100%;height: 50px;padding-top: 10px;">
                            <center>Welcome Admin</center>
                        </div>
                        <div>
                            @if (Session::has('error'))
                                <p class="alert "> {{ Session::get('error') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- page-wrapper -->


<script>
    var result = detect.parse(navigator.userAgent);
    var data = [];

    data.push(result.browser.family);
    data.push(result.os.family);

    $("[name='device']").val(JSON.stringify(data));

    $(document).ready(function() {
        $(".notification-drop .item").on('click', function() {
            $(this).find('ul').toggle();
        });
    });
    $(document).ready(function() {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

        trigger.click(function() {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isClosed == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function() {
            $('#wrapper').toggleClass('toggled');
        });
    });

    $(document).on("click", "#cust_btn", function() {

        $("#myModal").modal("toggle");

    })

    function showDateTime() {
        var myDiv = document.getElementById("myDiv");

        var date = new Date();
        var dayList = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        var monthNames = [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        ];
        var dayName = dayList[date.getDay()];
        var monthName = monthNames[date.getMonth()];
        var today = `${dayName}, ${monthName} ${date.getDate()}, ${date.getFullYear()}`;

        var hour = date.getHours();
        var min = date.getMinutes();
        var sec = date.getSeconds();

        var time = hour + ":" + min + ":" + sec;
        myDiv.innerText = `Hari  ${today}. Jam ${time}`;
    }
    setInterval(showDateTime, 1000);
</script>
@yield('content')
