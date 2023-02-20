<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="notif.css">

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
    body {
        position: relative;
        overflow-x: hidden;
        width: 100%;
        background-color: white !important;
        ;
    }

    body,
    html {
        height: 100%;
    }

    .nav .open>a,
    .nav .open>a:hover,
    .nav .open>a:focus {
        background-color: transparent;
    }

    /*-------------------------------*/
    /*           Wrappers            */
    /*-------------------------------*/

    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled {
        padding-left: 220px;
        margin-left: 220px;
    }

    #sidebar-wrapper {
        z-index: 1000;
        left: 220px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        overflow-x: hidden;
        background-color: #023e94;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #sidebar-wrapper::-webkit-scrollbar {
        display: none;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 300px;
    }

    #page-content-wrapper {
        width: 100%;
        padding-top: 70px;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-left: -260px;
    }

    /*-------------------------------*/
    /*     Sidebar nav styles        */
    /*-------------------------------*/
    .navbar {
        padding: 0;
    }

    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 220px;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav li {
        position: relative;
        margin-top: 40px;
        margin-left: 15px;
        line-height: 10px;
        display: inline-block;
        width: 100%;
        margin-bottom: -20px;
    }

    .sidebar-nav li:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        height: 100%;
        width: 3px;
        background-color: #023e94;
        -webkit-transition: width .2s ease-in;
        -moz-transition: width .2s ease-in;
        -ms-transition: width .2s ease-in;
        transition: width .2s ease-in;

    }

    .sidebar-nav li:hover {
        background: #113d7b !important;
        border-radius: 10px;
        margin-left: 10px;
        margin-right: 10px;
        line-height: 10px;
    }

    .sidebar-nav li:hover:before,
    .sidebar-nav li.open:hover:before {
        width: 100%;
        -webkit-transition: width .2s ease-in;
        -moz-transition: width .2s ease-in;
        -ms-transition: width .2s ease-in;
        transition: width .2s ease-in;

    }

    .sidebar-nav li a {
        display: block;
        color: #ddd;
        text-decoration: none;
        padding: 10px 15px 10px 30px;
    }

    .sidebar-nav li a:hover,
    .sidebar-nav li a:active,
    .sidebar-nav li a:focus,
    .sidebar-nav li.open a:hover,
    .sidebar-nav li.open a:active,
    .sidebar-nav li.open a:focus {
        color: #fff;
        text-decoration: none;
        background-color: transparent;
    }

    .sidebar-header {
        text-align: center;
        font-size: 20px;
        position: relative;
        width: 100%;
        height: 80px;
    }

    .sidebar-brand {
        height: 120px;
        position: relative;
        background: #023e94;
        background: linear-gradient(to right bottom, #0f3e81 50%, #0e2670 50%);
        padding-top: 1em;
        width: 135%;
    }

    .sidebar-brand a {
        color: #ddd;
    }

    .sidebar-brand a:hover {
        color: #fff;
        text-decoration: none;
    }

    .dropdown-header {
        text-align: center;
        font-size: 1em;
        color: #ddd;
        width: 0;
        background: #023e94;
        background: linear-gradient(to right bottom, #0f3e81 50%, #0e2670 50%);
    }

    .sidebar-nav .dropdown-menu {
        position: relative;
        width: 100%;
        padding: 0;
        margin: 0;
        border-radius: 0;
        border: none;
        background-color: #023e94;
        box-shadow: none;
        width: 135%;
    }

    .dropdown-menu.show {
        top: 0;
    }

    /*Fontawesome icons*/
    .nav.sidebar-nav li a::before {
        font-family: fontawesome;
        vertical-align: baseline;
        display: inline-block;
        padding-right: 5px;
    }



    /*-------------------------------*/
    /*       Hamburger-Cross         */
    /*-------------------------------*/

    .hamburger {
        position: fixed;
        top: 20px;
        z-index: 999;
        display: block;
        width: 32px;
        height: 32px;
        margin-left: 10%;
        background: transparent;
        border: none;
    }

    .hamburger:hover,
    .hamburger:focus,
    .hamburger:active {
        outline: none;
    }

    .hamburger.is-closed:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        -webkit-transition: all .35s ease-in-out;

    }

    .hamburger.is-closed:hover:before {
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(-100px, 0, 0);
        -webkit-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom,
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        position: absolute;
        left: 0;
        height: 4px;
        width: 100%;
    }

    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom {
        background-color: #023e94;
    }

    .hamburger.is-closed .hamb-top {
        top: 5px;
        -webkit-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed .hamb-middle {
        top: 50%;
        margin-top: -2px;
    }

    .hamburger.is-closed .hamb-bottom {
        bottom: 5px;
        -webkit-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed:hover .hamb-top {
        top: 0;
        -webkit-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed:hover .hamb-bottom {
        bottom: 0;
        -webkit-transition: all .35s ease-in-out;
    }

    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        background-color: #023e94;
    }

    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-bottom {
        top: 50%;
        margin-top: -2px;
    }

    .hamburger.is-open .hamb-top {
        -webkit-transform: rotate(45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73, 1, .28, .08);
    }

    .hamburger.is-open .hamb-middle {
        display: none;
    }

    .hamburger.is-open .hamb-bottom {
        -webkit-transform: rotate(-45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73, 1, .28, .08);
    }

    .hamburger.is-open:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        -webkit-transition: all .35s ease-in-out;
    }

    .hamburger.is-open:hover:before {
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(-100px, 0, 0);
        -webkit-transition: all .35s ease-in-out;
    }

    /*-------------------------------*/
    /*            Overlay            */
    /*-------------------------------*/

    .right {
        position: absolute;
        width: 40%;
        right: 10%;
        display: flex;
    }

    .button:focus {
        outline: none;
    }

    .t {
        margin-bottom: 40px;
        margin-left: -40%;
    }

    .p {
        margin-bottom: 1%;
        margin-right: -40%
    }

    .burger {
        margin-left: 10%;
    }



    @media screen and (max-width:600px) {


        .t {
            margin-left: 40%;
            font-size: 15px;
        }

        .burger {
            margin-left: 20%;
        }

        .p{
            margin-right: -80%;
        }
    }
</style>

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
                        <li style="margin-bottom: 5px;"><a href="{{ url('/masterJenisharga') }}">Master Jenis Harga</a>
                        </li>
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
                        <li style="line-height:15px;"><a href="{{ url('/masterTeam') }}">Master Team Pengiriman</a>
                        </li>
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
                        <button style="background-color: transparent;border:none;color:white;margin-left:25px;"><i
                                class="fas fa-sign-out-alt"></i>Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"></a>

            <div class="t">
                <div style="color: black;font-size: 80%;margin-left: 1%;padding-top: 25px;width: 100%;text-align:center" id="myDiv"></div>
                <ul class="notification-drop right p t">
                    <li class="item">
                        <span class="btn__badge pulse-button " style="">4</span>
                        <i class="fa fa-bell notification-bell dashboard-toolbar" style="text-align:right;" aria-hidden="true"></i>
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
                            @include('form.formactivity')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>

<script>

$(document).ready(function() {
  $(".notification-drop .item").on('click',function() {
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

    var result = detect.parse(navigator.userAgent);
    var data = [];

    data.push(result.browser.family);
    data.push(result.os.family);

    $("[name='device']").val(JSON.stringify(data));
    $(document).on("click", "#cust_btn", function() {

        $("#myModal").modal("toggle");

    })
    $(document).ready(function() {
        $(".notification-drop .item").on('click', function() {
            $(this).find('ul').toggle();
        });
    });

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
