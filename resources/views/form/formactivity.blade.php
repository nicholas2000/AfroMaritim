<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<style>
    .button:focus {
        outline: none;
    }


    .btnUser {
        width: 35%;
        height: 50px;
        border: #4d607c 1px solid;
        background-color: transparent;
        border-radius: 15px;
    }
    .wrapper{
        display: block;
    overflow-x: auto;
    white-space: nowrap;
    }
</style>

<body>
    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="container">
                <div class="col-12 ">
                    <h1> Form Activity</h1>
                    <hr class="mt" />
                </div>
                <br>
                <div class="container">
                    <div class="row">

                        <div class="col-md">
                            <button id=btnUser onclick="userClick()"
                                style="width: 100%;height: 30px;background-color: transparent;border: none;"
                                class="button" type="button">
                                <center>Hak Akses </center>
                            </button>
                        </div>
                        <div class="col-md">
                            <button id=btnLogin onclick="loginClick()"
                                style="width: 100%;height: 30px;background-color: transparent;border: none;"
                                class="button" type="button">
                                <center>Activity Login </center>
                            </button>
                        </div>
                    </div>
                    <hr class="mt" />
                </div>

                <br><br>
                <div id="user" class="wrapper" style="display: none">
                    <div class="container col-md-10" >
                        <table class="table">
                            <thead style="background-color:  #023e94;color: white;">
                                <tr>
                                    <th>Access </th>
                                    <th>
                                        <center>Admin Surabaya</center>
                                    </th>
                                    <th>
                                        <center>Admin Makassar</center>
                                    </th>
                                    <th>
                                        <center>Accouting</center>
                                    </th>
                                    <th>
                                        <center>Kurir</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $ctr2 = 1; ?>
                                @foreach ($arrPermission as $prm)
                                    <tr>
                                        <td>{{ $prm->daftar_berita }}</td>
                                        <td>
                                            <center><input class="form-check-input" type="checkbox"
                                                    value="adminsurabaya,{{ $prm->daftar_berita }}" onclick="myFunction(this)"
                                                    id="cekAdminsurabaya{{ $ctr2 - 1 }}">
                                            </center>
                                        </td>
                                        <td>
                                            <center><input class="form-check-input" type="checkbox"
                                                    value="adminmakassar,{{ $prm->daftar_berita }}" onclick="myFunction(this)"
                                                    id="cekAdminmakassar{{ $ctr2 - 1 }}">
                                            </center>
                                        </td>
                                        <td>
                                            <center><input class="form-check-input" type="checkbox"
                                                    value="accounting,{{ $prm->daftar_berita }}"
                                                    onclick="myFunction(this)" id="cekAccounting{{ $ctr2 - 1 }}">
                                            </center>
                                        </td>
                                        <td>
                                            <center><input class="form-check-input" type="checkbox"
                                                    value="kurir,{{ $prm->daftar_berita }}" onclick="myFunction(this)"
                                                    id="cekKurir{{ $ctr2 - 1 }}">
                                            </center>
                                        </td>
                                    </tr>
                                    <?php $ctr2++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="login" style="display: none">

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16"
                                        fill="currentColor" class="bi bi-file-excel" viewBox="0 0 16 16">
                                        <path
                                            d="M5.18 4.616a.5.5 0 0 1 .704.064L8 7.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 8l2.233 2.68a.5.5 0 0 1-.768.64L8 8.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 8 5.116 5.32a.5.5 0 0 1 .064-.704z">
                                        </path>
                                        <path
                                            d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z">
                                        </path>
                                    </svg>
                                    Excel
                                </button>

                                <button type="button" class="btn btn-outline-danger" style="margin-left: 5%; ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16"
                                        fill="currentColor" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                        <path
                                            d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z">
                                        </path>
                                        <path
                                            d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z">
                                        </path>
                                    </svg>
                                    PDF
                                </button>
                            </div>

                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="search" placeholder="Search">
                            </div>

                            <div class="col-sm-3">
                                <input type="text" name="daterange" value="" />

                                <i class="fas fa-calendar input-prefix"></i>
                            </div>
                        </div>
                    </div>
                    <hr class="mt" />
                    <div class="container col-md-10 " style="width: 100%;overflow: hidden;">
                        <div class="col-12">

                            <table class="table" style="overflow-x: auto; display: block;
                            white-space: nowrap;">
                                <thead style="background-color:  #023e94;color: white;">
                                    <tr>
                                        <th>
                                            <center>No</center>
                                        </th>
                                        <th>
                                            <center>User</center>
                                        </th>
                                        <th>
                                            <center>Activity</center>
                                        </th>
                                        <th>
                                            <center>IP</center>
                                        </th>
                                        <th>
                                            <center>OS</center>
                                        </th>
                                        <th>
                                            <center>Browser</center>
                                        </th>
                                        <th>
                                            <center>Created At</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $ctr = 1; ?>
                                    @foreach ($arrActivity as $prm)
                                        <tr>

                                            <th scope="row">{{ $ctr }}</th>
                                            <th scope="col">
                                                {{ $prm->user }}
                                            </th>
                                            @if ($prm->activity == 'Login Berhasil')
                                                <th scope="col">
                                                    <div
                                                        style="background-color: rgb(70, 237, 70);width: 100%;border-radius: 10px;color:white;">
                                                        {{ $prm->activity }}
                                                    </div>
                                                </th>
                                            @else
                                                <th scope="col">
                                                    <div
                                                        style="background-color: red;width: 100%;border-radius: 10px;color:white;">
                                                        {{ $prm->activity }}
                                                    </div>
                                                </th>
                                            @endif
                                            <th scope="col">
                                                {{ $prm->ip_address }}
                                            </th>
                                            <th scope="col">
                                                {{ $prm->browser }}
                                            </th>
                                            <th scope="col">
                                                {{ $prm->os }}
                                            </th>
                                            <th scope="col">
                                                {{ $prm->created_at->format('d/M/Y H:i:s') }}
                                            </th>
                                            <?php $ctr++; ?>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </section>

</body>

<script type="text/javascript">

    var jArray = <?php echo json_encode($arrPermission); ?>;
    for (var i = 0; i < jArray.length; i++) {
        if (jArray[i]['adminsurabaya'] == 1) {
            document.getElementById("cekAdminsurabaya" + i.toString()).checked = true;
        } else if (jArray[i]['adminsurabaya'] == 0){
            document.getElementById("cekAdminsurabaya" + i.toString()).checked = false;
        }
        if (jArray[i]['adminmakassar'] == 1) {
            document.getElementById("cekAdminmakassar" + i.toString()).checked = true;
        } else if (jArray[i]['adminmakassar'] == 0) {
            document.getElementById("cekAdminmakassar" + i.toString()).checked = false;
        }
        if (jArray[i]['accounting'] == 1) {
            document.getElementById("cekAccounting" + i.toString()).checked = true;
        } else if (jArray[i]['accounting'] == 0) {
            document.getElementById("cekAccounting" + i.toString()).checked = false;
        }
        if (jArray[i]['kurir'] == 1) {
            document.getElementById("cekKurir" + i.toString()).checked = true;
        } else if (jArray[i]['kurir'] == 0) {
            document.getElementById("cekKurir" + i.toString()).checked = false;
        }
    }

    function myFunction(x) {
        $arr = x.value.split(",");
        if (x.checked == true) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query1: $arr[0],
                    query2: $arr[1],
                    ctr: "Factivitytrue"
                },
            });
        } else {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query1: $arr[0],
                    query2: $arr[1],
                    ctr: "Factivityfalse"
                },
            });
        }
    }

    function loginClick() {
        document.getElementById("login").style.display = "block";
        document.getElementById("user").style.display = "none";
        document.getElementById("btnLogin").style.backgroundColor = "AliceBlue";
        document.getElementById("btnUser").style.backgroundColor = "transparent";
    }

    function userClick() {
        document.getElementById("user").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("btnUser").style.backgroundColor = "AliceBlue";
        document.getElementById("btnLogin").style.backgroundColor = "transparent";
    }

    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });
</script>

</html>
