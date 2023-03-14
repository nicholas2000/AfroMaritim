
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
<body>
    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-5 form-group">

                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-3">
                        <div>Nama Pegawai :</div>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-sm-9">
                        <div>
                            <h3>Depo</h3>
                        </div>
                    </div>

                    <div class="col-sm-3">

                        <div>
                            <a href="" class="btn btn-primary" style="color: white;height: 37px;margin-right: 5%;"
                            class="ps">Import</a>
                            <a href="" id="btn-excel" class="btn btn-success"
                            style="color: white;height: 37px;">Export</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <form method="post" action="{{ url('/tambahDepo') }}">
                        @csrf
                        <input type="hidden" name="data">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 form-group">
                            <div class="search-box">
                                <input style="width: 210px;" type="text" name="contSearch" id="contSearch" class="form-control" placeholder="No Container" />
                                <div id="wrapper_cont" onclick="hidden()">
                                    <div class="scrollbar">
                                        <div class="list force-overflow" id="contList" style="width: 210px;"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 form-group"></div>
                        <div class="col-sm-12 col-md-6 form-group">
                            <div class="ps ">
                                <div class="col-md-8">No Resi</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="noresi" type='text' >
                                </div>
                            </div>
                            <br>
                            <div class="ps">
                                <div class="col-md-8">Tanggal Masuk</div>
                                <div>:</div>
                                <div class="col-md-2" ><input style="width:185px;"  name="tglmasuk" type="date" data-date-format="DD/MON/YYYY" value="<?php echo date('Y-m-d'); ?>" readonly/>
                                </div>
                            </div>
                            <br>
                            <div class="ps">
                                <div class="col-md-8">Nama Penerima</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="namapenerima" type='text'>
                                </div>
                            </div>
                            <br>
                            <div class="ps">
                                <div class="col-md-8">Nama Pengirim</div>
                                <div>:</div>
                                <div class="col-md-2">
                                    <div class="search-box">
                                        <input style="" type="text" name="namapengirim" id="user" class="" placeholder="" />
                                        <div id="wrapper" onclick="hidden()">
                                            <div class="scrollbar">
                                                <div class="list force-overflow" id="userList" style="width: 185px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="alamatpengirim" id="alamatpengirim" value="">
                                <input type="hidden" name="nohppengirim" id="nohppengirim" value="">
                                <input type="hidden" name="emailpengirim" id="emailpengirim" value="">
                            </div>
                            <br>
                        </div>

                        <div class="col-sm-12 col-md-6 form-group">


                            <div class="p ">
                                <div class="col-md-8">Jenis Barang</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="jenis_barang" type='text'>
                                </div>
                            </div>
                            <br>
                            <div class="ps ">
                                <div class="col-md-8">Colly (Jumlah Barang)</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="colly" type='text'>
                                </div>
                            </div>
                            <br>
                            <div class="ps ">
                                <div class="col-md-8">Volume</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="volume" type='text'>
                                </div>
                            </div>
                            <br>
                            <div class="ps ">
                                <div class="col-md-8">Muatan Akhir</div>
                                <div>:</div>
                                <div class="col-md-6">
                                    <input type="radio" name="final" id="" value="yes">  Yes
                                    <input type="radio" name="final" id="" value="no" checked hidden>
                                </div>
                            </div>
                            <br>
                            <div class="ps">
                                <div class="col-md-8"></div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="col-12">
                    <table class="table table-bordered">
                        <tr style="background-color:  #023e94;color: white;">
                            <th scope="col" style="width:15%">
                                <center>Tanggal</center>
                            </th>
                            <th scope="col">
                                <center>No Resi</center>
                            </th>
                            <th scope="col">
                                <center>Nama Penerima</center>
                            </th>
                            <th scope="col">
                                <center>Nama Pengirim</center>
                            </th>
                            <th scope="col">
                                <center>Jenis Barang</center>
                            </th>
                            <th scope="col">
                                <center>Colly</center>
                            </th>
                            <th scope="col">
                                <center>Volume</center>
                            </th>
                            <th scope="col">
                                <center>No Container</center>
                            </th>
                            <th scope="col">
                                <center>Action</center>
                            </th>
                        </tr>
                        <?php $ctr = 1; ?>

                        @foreach ($Transaksi as $prm)
                        <tr>


                            <th scope="col">
                                <center>{{ $prm->tanggal}}</center>
                            </th>
                            <th scope="col">
                                <center>{{ $prm->nomor_resi }}</center>
                            </th>
                            <th scope="col">
                                <center>{{ $prm->nama_penerima }}</center>
                            </th>
                            <th scope="col">
                                <center>{{ $prm->nama_pengirim }}</center>
                            </th>
                            <th scope="col">
                                <center>{{ $prm->jenis_barang }}</center>
                            </th>
                            <th scope="col">
                                <center>{{ $prm->jumlah_barang }}</center>
                            </th>
                            <th scope="col">
                                <center>{{ $prm->volume }}</center>
                            </th>
                            <th scope="col">
                                <center>{{ $prm->nomor_container }}</center>
                            </th>
                            <th scope="col">
                                <center style="display: flex;">
                                    <button style="height: 29px;" class="btn" id="btnedit" data-toggle="modal"
                                    data-target="#myModal" onclick="btnedit({{ $ctr - 1 }})"><i
                                    class="fa fa-pencil"></i></button>

                                    <form method="post"
                                    action="{{ url('/formDepo/delete/' . $prm->nomor_transaksi) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i
                                        class="fa fa-trash"></i></button>
                                    </form>
                                </center>
                            </th>
                        </tr>
                        <?php $ctr++; ?>
                        @endforeach
                    </table>

                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>Edit Cabang</h4>
                                    <button class="close" type="button" data-dismiss="modal">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="popup">
                                        <form action="{{ url('/editDepo') }}" method="post">
                                            @csrf

                                            <label style="margin-left: 40px;">Nama Penerima</label>
                                            <input name="nama_penerima" placeholder="Masukkan Nama Penerima" class="form-control"
                                            type="text">

                                            <label style="margin-left: 40px;">Nama Pengirim</label>
                                            <input name="nama_pengirim" placeholder="Masukkan Nama Pengirim" class="form-control"
                                            type="text">

                                            <label style="margin-left: 40px;">Nama Barang</label>
                                            <input name="nama_barang" placeholder="Masukkan Nama Barang" class="form-control"
                                            type="text">

                                            <label style="margin-left: 40px;">Nomor Resi</label>
                                            <input name="nomor_resi" placeholder="Masukkan Nomor Resi" class="form-control"
                                            type="text">

                                            <label style="margin-left: 40px;">Nomor Container</label>
                                            <input name="nomor_container" placeholder="Masukkan Nomor Container" class="form-control"
                                            type="text">
                                            <input type="hidden" name="nomor_transaksi" value="">


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
    </div>
</section>
</body>
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
    $(document).ready(function(){
        //container
        $('#contSearch').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url:"autocomplete.php",
                    method:"POST",
                    data:{query:query,ctr:"Fcontainerdepo"},
                    success:function(data)
                    {
                        if(data.length>1){
                            $('#contList').fadeIn();
                            $('#contList').html(data);
                        }else{
                            $('#contList').fadeOut();
                            $('#contList').html("");
                            $("#wrapper_cont").css("display", "none");
                        }
                    }
                });
            }
        });
        $(document).on('click', '#package_cont li', function(){
            $('#contSearch').val($(this).text());
            $('#contList').fadeOut();
            $("#wrapper_cont").css("display", "none");
        });
        //user
        $('#user').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url:"autocomplete.php",
                    method:"POST",
                    data:{query:query,ctr:"Ftransdepo"},
                    success:function(data)
                    {
                        if(data.length>1){
                            $('#userList').fadeIn();
                            $('#userList').html(data);
                        }else{
                            $('#userList').fadeOut();
                            $('#userList').html("");
                            $("#wrapper").css("display", "none");

                        }
                    }
                });
            }
        });
        $(document).on('click', '#package_nama li', function(){
            $('#user').val($(this).text());
            $('#userList').fadeOut();
            // $("#wrapper").css("display", "none");
            document.getElementById("#wrapper").css.display='none';
            const getID = $(this).text().split('-');
            document.getElementById("alamatpengirim").value = $('#'+getID[0]).data('alamat');
            document.getElementById("nohppengirim").value = $('#'+getID[0]).data('hp');
            document.getElementById("emailpengirim").value = $('#'+getID[0]).data('email');
        });
    });
    // $("#wrapper").css("display", "none");
    // $("#wrapper_cont").css("display", "none");
    document.getElementById("#wrapper").css.display = "none";
    document.getElementById("#wrapper_cont").css.display = "none";

    // $("#wrapper_resi").css("display", "none");

    $("#user").on("input", function(){
        if($("#user").val()==""){
            $("#wrapper").css("display", "none");
        }else{
            $("#wrapper").css("display", "block");
        }
    });

    $("#contSearch").on("input", function(){
        if($("#contSearch").val()==""){
            $("#wrapper_cont").css("display", "none");
        }else{
            $("#wrapper_cont").css("display", "block");
        }
    });

    function btnedit(id) {
        var jArray = <?php echo json_encode($Transaksi); ?>;
        $("[name='nama_pengirim']").val(jArray[id]['nama_pengirim']);
        $("[name='nama_penerima']").val(jArray[id]['nama_penerima']);
        $("[name='nama_barang']").val(jArray[id]['nama_barang']);
        $("[name='nomor_resi']").val(jArray[id]['nomor_resi']);
        $("[name='nomor_container']").val(jArray[id]['nomor_container']);
        $("[name='nomor_transaksi']").val(jArray[id]['nomor_transaksi']);
    }
</script>
