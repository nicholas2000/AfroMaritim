<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="sidebar.css">
<script src="sidebar.js"></script>



<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .right {
        position: absolute;
        width: 40%;
        right: 10%;
        display: flex;
    }
    @media screen and (max-width:600px) {
    .p{
        right: -20%;
    }
}
</style>
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
                    <i class="fas fa-bars"></i></a><a href="#" class="brand-logo"><i class=""><img
                            style="width: 50px;border-radius: 50%;" src="logo.png" alt="" srcset=""></i>
                    <span style="font-size: 17px;">Afro Trans Maritim</span></a>

            </header>

            <nav class="dashboard-nav-list"><a href="{{ url('/dashboard') }}" class="dashboard-nav-item"><i class="fas fa-home"></i>Home </a>
                <div class='dashboard-nav-dropdown' style="background-color:#023e94"><a href="#!"
                        class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fa fa-user-circle"></i>
                        Master </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="{{ url('/masterCabang') }}"class="dashboard-nav-dropdown-item">Master Cabang</a>
                        <a href="{{ url('/masterPegawai') }}"class="dashboard-nav-dropdown-item">Master Pegawai</a>
                        <a href="{{ url('/masterCustomer') }}"class="dashboard-nav-dropdown-item">Master
                            Customer</a>
                        <a href="{{ url('/masterKompetitor') }}"class="dashboard-nav-dropdown-item">Master Kompetitor</a>
                        <a href="{{ url('/masterJenisharga') }}"class="dashboard-nav-dropdown-item">Master Jenis Harga</a>


                    </div>
                    <div class='dashboard-nav-dropdown'>
                        <a href="#!"class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                                class="fas fa-exchange-alt"></i> Transaksi</a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="{{ url('/masterTransaksi') }}"class="dashboard-nav-dropdown-item">Transaksi</a>
                            <a href="{{ url('/masterHistory') }}"class="dashboard-nav-dropdown-item">History
                                Transaksi</a>
                            <a href="{{ url('/masterStatus') }}"class="dashboard-nav-dropdown-item">Status Barang</a>
                            <a href="{{ url('/masterTeam') }}"class="dashboard-nav-dropdown-item">Master Team Pengiriman</a>
                            <a href="{{ url('/masterpengirimansatu') }}"class="dashboard-nav-dropdown-item">Opsi 1</a>
                            <a href="{{ url('/masterpengirimandua') }}"class="dashboard-nav-dropdown-item">Opsi 2</a>
                        </div>
                    </div>
                    <div class='dashboard-nav-dropdown'>
                        <a href="#!"class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                                class="	far fa-money-bill-alt"></i>Keuangan </a>
                        <div class='dashboard-nav-dropdown-menu'>

                            <a href="{{ url('/masterPiutang') }}"class="dashboard-nav-dropdown-item">Master Piutang</a>
                        </div>
                    </div>
                    <div class="nav-item-divider"></div>
                    <a href="{{ url('/') }}" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <div style="color: white;font-size: 80%" id="myDiv"></div>
                <ul class="notification-drop right p">
                    <li class="item">
                        <i class="fa fa-bell notification-bell" style="font-size: 100%;" aria-hidden="true"></i> <span
                            class="btn__badge pulse-button ">4</span>
                        <ul>
                            <li>First Item</li>
                            <li>Second Item</li>
                            <li>Third Item</li>
                        </ul>
                    </li>
                </ul>
            </header>
            <div class='dashboard-content'>
                <div class='container'>
                    <div class='card-header'>
                        Welcome Admin
                    </div>
                    <div class='card-body'>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script>
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
@yield('content')
