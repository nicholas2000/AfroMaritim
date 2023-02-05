
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
<style>
    .userList
    {
        background-color:aliceblue;
        cursor:pointer;
    }
    li
    {
        padding:12px;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/table2excel@1.0.4/dist/table2excel.min.js"></script>
<style>
    .p {
        display: flex;
        width: 80%;
    }

    @media screen and (max-width:600px) {
        .p {
            width: 75%;
        }

        .pk{
            margin-right: 5%;
        }
    }

    .clickable {
        cursor: pointer;
    }
</style>
<section class="order-form m-4">
    <div class="container pt-4">
        <div class="container">
            <div class="row ">
                <div class="col-sm-5 form-group">
                    <div class="input-group">
                        <input type="search"  class="form-control rounded p" placeholder=" Transaksi"
                            aria-label="Search" aria-describedby="search-addon" />
                     </div>

                </div>
                <div class="col-sm">
                    </div>
                <div class="col-sm-3">
                    </div>
                <div class="col-sm-3">
                    <div>Nama Pegawai :</div>
                    </div>

            </div>
            <div class="row ">
                <div class="col-sm-5">
                <div><h3> History Transaksi</h3></div>
                </div>
                <div class="col-sm-3">
                    <input type='text' style="width: 180px;" placeholder="Search">
                    </div>
                <div class="col-sm">

                <div style="">
                    <a href="" class="btn btn-primary" style="color: white;height: 37px;margin-right: 5%;" class="p">Import</a>
                    <a href="" id="btn-excel" class="btn btn-success"
                        style="color: white;height: 37px;">Export</a>
                </div>
            </div>
        </div>



            <br>
            <div class="row">
                <div class="col-sm-12 col-md-6 form-group">
                    <div class="col-sm-3">
                        Nama Customer :
                    </div>
                    <div class="col-sm">
                        <div class="search-box">
                            {{-- <div class="row-fluid">
                                <select class="selectpicker result" data-show-subtext="true"
                                    data-live-search="true"> --}}
                            <!-- <div class="result"></div> -->
                            {{-- <option data-subtext="Rep California">Tom Foolery</option>
                                      <option data-subtext="Sen California">Bill Gordon</option>
                                      <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                      <option data-subtext="Rep Alabama">Mario Flores</option>
                                      <option data-subtext="Rep Alaska">Don Young</option>
                                      <option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option> --}}
                            {{-- </select>
                            </div> --}}
                            <input style="width: 210px;" type="text" name="namacust" id="user" class="form-control" placeholder="Masukkan Nama" />
                            <br>
                            <div class="userList"  id="userList" style="width: 210px;"></div>
                        </div>

                    </div>

                    <br>
                    <div class="p">
                        <div class="col-md-6">Nama Customer</div>
                        <div>:</div>
                        <div class="col-md-3"><input type='text' style="width: 180px;"
                            disabled  >
                        </div>
                    </div>
                    <br>
                    <div class="p">
                        <div class="col-md-6">Tanggal Pengiriman</div>
                        <div>:</div>
                        <div class="col-md-3"><input type='text' style="width: 180px;"
                               disabled >
                        </div>
                    </div>
                    <br>

                    {{-- ----- --}}
                </div>
                <div class="col-sm-12 col-md-6 form-group">

                    <div class="p ">
                        <div class="col-sm-5">No Kapal</div>
                        <div>:</div>
                        <div class="col-md-3"><input type='text' style="width: 180px;"
                             >
                     </div>
                    </div>
                    <br>
                    <div class="p ">
                        <div class="col-sm-5">No Container</div>
                        <div>:</div>
                        <div class="col-md-3"><input type='text' style="width: 180px;"
                             >
                     </div>
                    </div>
                    <br>
                    <a href=""class="btn btn-primary" style="float: right">Update</a>
                    <br>
                </div>

                <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>


        <section class="order-form m-4">
            <div class="container pt-4">
                <div class="container">
                    <div class="col-12 ">
                        <h1> Form Master Pegawai</h1>
                        <hr class="mt" />
                    </div>
                    <br>


                    <div class="col-12">
                        <a href="{{ url('/tpegawai') }}"><button style="float: right;" type="button"
                            class="btn btn-primary">Tambah</button></a>
                    </div>
                    <br><br>
                    <div class="col-12">
                        <table class="table table-bordered">
                            <tr style="background-color:  #023e94;color: white;">
                                <th scope="col">No</th>
                                <th scope="col">
                                    <center>ID Pegawai</center>
                                </th>
                                <th scope="col">
                                    <center>Nama Pegawai</center>
                                </th>
                                <th scope="col">
                                    <center>Alamat Pegawai</center>
                                </th>
                                <th scope="col">
                                    <center>Role Pegawai</center>
                                </th>
                            </tr>
                            <?php $ctr = 1; ?>

                            @foreach ($arrHistory as $prm)
                                <tr>

                                    <th scope="row">{{ $ctr }}</th>
                                    <th scope="col">
                                        <center>{{ $prm->id_pegawai }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->nama_pegawai }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->alamat_pegawai }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->role_pegawai }}</center>
                                    </th>
                                </tr>
                                <?php $ctr++; ?>
                            @endforeach


                        </table>
                    </div>

                </div>
        </section>

</body>

</html>

            </div>
        </div>
    </div>
</section>
<script>
    function onlyNumberKey(evt) {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }

    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#dp1').datepicker({

        beforeShowDay: function(date) {
            return date.valueOf() >= now.valueOf();
        },
        autoclose: true

    }).on('changeDate', function(ev) {
        if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate")
            .valueOf()) {

            var newDate = new Date(ev.date);
            newDate.setDate(newDate.getDate() + 1);
            checkout.datepicker("update", newDate);

        }
        $('#dp2')[0].focus();
    });


    var checkout = $('#dp2').datepicker({
        beforeShowDay: function(date) {
            if (!checkin.datepicker("getDate").valueOf()) {
                return date.valueOf() >= new Date().valueOf();
            } else {
                return date.valueOf() > checkin.datepicker("getDate").valueOf();
            }
        },
        autoclose: true

    }).on('changeDate', function(ev) {});

    document.getElementById("btn-excel").addEventListener("click", () => {
        let table2excel = new Table2Excel();
        table2excel.export(document.querySelector("#datatables"));
    });
</script>


<script>
    $(document).ready(function(){
        $('#user').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url:"backend-search.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data)
                    {
                        $('#userList').fadeIn();
                        $('#userList').html(data);
                    }
                });
            }
        });
        $(document).on('click', 'li', function(){
            $('#user').val($(this).text());
            $('#userList').fadeOut();
        });
    });
</script>
