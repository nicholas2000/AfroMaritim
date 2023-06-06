{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"> --}}
<style>
    .list li {
        background-color: aliceblue;
        cursor: pointer;
        padding: 12px;
    }

    .popup form {
        width: 100%;
    }

    .popup form input,
    .popup form select {
        font-family: "Roboto";
        font-weight: 300;
        font-size: 16px;
    }

    .popup form input,
    .popup form select {
        height: 38px;
    }

    .popup form input,
    .popup form select {
        border: 1px solid #d0d0d0;
        display: block;
        margin: 0 auto;
        margin-bottom: 20px;
        padding-left: 10px;
        width: 83.55%;
    }



    ::-webkit-input-placeholder {
        color: blue;
        opacity: 1;
    }

    ::-moz-placeholder {
        color: blue;
        opacity: 1;
    }

    :-moz-placeholder {
        color: blue;
        opacity: 1;
    }

    :-ms-input-placeholder {
        color: blue;
        opacity: 1;
    }

    .popup form select {
        background-image: url("../image/arr-black.png");
        background-position: right 10px center;
        background-repeat: no-repeat;
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 0.01px;
        text-overflow: '';
        -ms-appearance: none;
        appearance: none !important;
    }


    .popup form input[type="submit"] {
        border-radius: 3px;
        width: 317px;
        height: 40px;
        margin-bottom: 0;
        font-weight: 500;
        font-size: 1em;
        color: #ffffff;
        line-height: 23px;
    }
</style>
<style>
    .userList li{
        background-color: aliceblue;
        cursor: pointer;
        padding: 12px;
    }

</style>
<script src="https://cdn.jsdelivr.net/npm/table2excel@1.0.4/dist/table2excel.min.js"></script>
<style>
    .ps {
        display: flex;
        width: 80%;
    }

    @media screen and (max-width:600px) {
        .ps {
            width: 75%;
        }

        .pk {
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
            @if ($errors->any())
    @foreach ($errors->all() as $err)
        <div class="alert alert-danger">{{ $err }}</div>
    @endforeach
@endif
@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif
            <div class="row ">
                <div class="col-sm-5 form-group">
                    <div class="input-group">
                        <input type="search" class="form-control rounded ps" placeholder=" Transaksi"
                            aria-label="Search" aria-describedby="search-addon" />
                    </div>

                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm-3">
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-sm-9">
                    <div>
                        <h3> Loading Kapal</h3>
                    </div>
                </div>

                <div class="col-sm-3">

                    <div style="">
                        <a href="" class="btn btn-primary" style="color: white;height: 37px;margin-right: 5%;"
                            class="ps">Import</a>
                        <a href="{{url('exportHistory')}}" id="btn-excel" class="btn btn-success"
                            style="color: white;height: 37px;">Export</a>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <form method="post" action="{{ url('masterHistory/update/') }}">
                    @csrf
                    <input type="hidden" name="data">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 form-group">

                            <div class="ps">
                                <div class="col-md-8">Tanggal Pengiriman</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="ntanggal" type='text' style="width: 180px;"
                                        disabled>
                                </div>
                            </div>
                            <br>
                            <div class="ps">
                                <div class="col-md-8">Nomor Segel</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="nomor_segel" type='text' style="width: 180px;">
                                </div>
                            </div>
                        </div>

                        {{-- ----- --}}

                        <div class="col-sm-12 col-md-6 form-group">

                            <div class="ps ">
                                <div class="col-md-6">Nama Kapal</div>
                                <div>:</div>
                                <div class="col-md-6"><input name="nkapal" type='text' style="width: 180px;">
                                </div>
                            </div>
                            <br>
                            <button style="float: right" id="update" type="submit" class="btn btn-success">Update</button>
                            <br>
                        </div>
                    </div>
                </form>

                <div class="col-12">
                    <table class="table table-bordered">
                        <tr style="background-color:  #023e94;color: white;">
                            <th scope="col">No</th>
                            <th scope="col">
                                <center>No Kontainer</center>
                            </th>
                            <th scope="col">
                                <center>No Segel</center>
                            </th>
                            <th scope="col">
                                <center>Isi Kontainer</center>
                            </th>
                            <th scope="col">
                                <center>Nama Kapal</center>
                            </th>
                            <th scope="col">
                                <center>Action</center>
                            </th>
                            <th scope="col">
                                <center>Pilih</center>
                            </th>
                        </tr>
                        <?php $ctr = 1; ?>

                        @foreach ($arrHistory as $prm)
                            <tr>

                                <th scope="row">{{ $prm->nomor_manifest }}</th>
                                <th scope="col">
                                    <center>{{ $prm->nomor_container }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nomor_segel }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->jenis_barang }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nama_kapal }}</center>
                                </th>



                                <th scope="col" style="display: flex">
                                    {{-- <a href="./delete/{{$prm->nomor_transaksi}}" class="btn btn-danger" style="">Delete</a> --}}
                                        <button style="height: 29px;" class="btn" id="btnedit" data-toggle="modal"
                                        data-target="#myModal" onclick="btnedit({{ $ctr - 1 }})"><i
                                        class="fa fa-pencil"></i></button>

                                    <form method="post"
                                        action="{{ url('masterHistory/delete/' . $prm->nomor_resi) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </th>
                                <th >
                                    <center><input type="checkbox"  value="{{$prm->nomor_resi}}" onclick="myFunction(this)"></center>
                                </th>

                            </tr>
                            <?php $ctr++; ?>
                        @endforeach
                    </table>
                </div>

                <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Edit Cabang</h4>
                                <button class="close" type="button" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="popup">
                                    <form action="{{ url('/editHistory') }}" method="post">
                                        @csrf

                                        <label style="margin-left: 40px;">No Kontainer</label>
                                        <input name="nomor_container" placeholder="Masukkan No Kontainer" class="form-control"
                                        type="text">

                                        <label style="margin-left: 40px;">Segel</label>
                                        <input name="nomor_segel" placeholder="Masukkan No Segel" class="form-control"
                                        type="text">

                                        <label style="margin-left: 40px;">Isi Kontainer</label>
                                        <input name="jenis_barang" placeholder="Masukkan Isi Kontainer" class="form-control"
                                        type="text">

                                        <label style="margin-left: 40px;">Colly</label>
                                        <input name="jumlah_barang" placeholder="Masukkan Jumlah Colly" class="form-control"
                                        type="text">


                                        <label style="margin-left: 40px;">Nama Kapal</label>
                                        <input name="nama_kapal" placeholder="Masukkan Nama Kapal" class="form-control"
                                        type="text">

                                        <input type="hidden" name="nomor_resi" value="">
                                        <input type="submit" value="Ubah" style="background-color: #023e94">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    var data3 = [];
    function myFunction(x) {
        if(x.checked==true)
        {
            data3.push(x.value);

        }else
        {
            data3.splice(data3.indexOf(x.value), 1);
        }

        $("[name='data']").val(JSON.stringify(data3));
    }

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
    $(document).ready(function() {
        $('#user').keyup(function() {
            var query = $(this).val();
            if (query != '') {
                $.ajax({
                    url: "autocomplete.php",
                    method: "POST",
                    data: {
                        query: query,
                        ctr: "Fhistory"
                    },
                    success: function(data) {
                        $('#userList').fadeIn();
                        $('#userList').html(data);
                    }
                });
            }
        });
        $(document).on('click', 'li', function() {
            $('#user').val($(this).text());
            $('#userList').fadeOut();
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $(this).text(),
                    ctr: "Fhistorynama"
                },
                success: function(data) {
                    $("[name='ncustomer']").val(data);
                }

            });
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $(this).text(),
                    ctr: "Fhistorytanggal"
                },
                success: function(data) {
                    $("[name='ntanggal']").val(data);
                }
            });
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $(this).text(),
                    ctr: "Fhistorynamakapal"
                },
                success: function(data) {
                    $("[name='nkapal']").val(data);
                }
            });
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $(this).text(),
                    ctr: "Fhistorynocontainer"
                },
                success: function(data) {
                    $("[name='ncontainer']").val(data);
                }
            });
        });
    });
    function btnedit(id) {
        var jArray = <?php echo json_encode($arrHistory); ?>;
        $("[name='nomor_container']").val(jArray[id]['nomor_container']);
        $("[name='nomor_segel']").val(jArray[id]['nomor_segel']);
        $("[name='jenis_barang']").val(jArray[id]['jenis_barang']);
        $("[name='jumlah_barang']").val(jArray[id]['jumlah_barang']);
        $("[name='nama_kapal']").val(jArray[id]['nama_kapal']);
        $("[name='nomor_resi']").val(jArray[id]['nomor_resi']);
    }
</script>
