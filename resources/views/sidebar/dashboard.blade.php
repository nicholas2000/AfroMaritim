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
    right: 0px;
    width: 300px;
    padding: 40px;
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
                <i class="fas fa-bars"></i></a><a href="#"
                    class="brand-logo"><i class=""><img style="width: 50px;border-radius: 50%;"
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
                <div style="color: white" id="myDiv"></div>
                <ul class="notification-drop right">
                    <li class="item">
                      <i class="fa fa-bell notification-bell" aria-hidden="true"></i> <span class="btn__badge pulse-button ">4</span>
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
                        
<div class="container">
	<div class="row">
		<div class="col-12 mt-4 text-center">
			<p><h1 class="font-weight-bold">HOW TO</h1></p>
			<p><h2 class="mb-5">Vertically center the Bootstrap 4 modal popin</h2></p>
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Open the Booty modal</button>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal modal-vcenter fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Penting!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<p class="mb-0"><strong>Yakin Update Data? </strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Iya</button>
      </div>
    </div>
  </div>
</div>

    
  </div>

</body>
</html>
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

<script>
    $(document).on("click","#cust_btn",function(){
  
  $("#myModal").modal("toggle");
  
})
    $(document).ready(function() {
  $(".notification-drop .item").on('click',function() {
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
