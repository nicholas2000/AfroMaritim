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
    .list {
        background-color: aliceblue;
        cursor: pointer;
    }

    li {
        padding: 12px;
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
            <div class="row ">
                <div class="col-sm-5 form-group">
                    <div class="input-group">
                        <input type="search" class="form-control rounded p" placeholder=" Transaksi"
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
            <br>
            <div class="row">
                <div class="col-sm-9">
                    <div>
                        <h3>Depo</h3>
                    </div>
                </div>

                <div class="col-sm-3">

                    <div style="">
                        <a href="" class="btn btn-primary" style="color: white;height: 37px;margin-right: 5%;"
                            class="p">Import</a>
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

                            <div class="p">
                                <div class="col-md-8">Tanggal Masuk</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="tglmasuk" type="date" value="<?php echo date('Y-m-d'); ?>" readonly/>
                                </div>
                            </div>
                            <br>
                            <div class="p">
                                <div class="col-md-8">Nama Pengirim</div>
                                <div>:</div>
                                <div class="col-md-2">
                                    <div class="search-box">
                                        <input style="width: 210px;" type="text" name="namapengirim" id="user" class="form-control" placeholder="Masukkan Nama" />
                                {{-- <input type="text" name="nama_pengirim" id="user"/> --}}
                                        <div id="wrapper" onclick="hidden()">
                                            <div class="scrollbar">
                                                <div class="list force-overflow" id="userList" style="width: 210px;"></div>
                                            </div>
                                        </div>
                                        {{-- <div id="result"></div> --}}
                                    </div>

                                </div>
                                <input type="hidden" name="alamatpengirim" id="alamatpengirim" value="">
                                <input type="hidden" name="nohppengirim" id="nohppengirim" value="">
                                <input type="hidden" name="emailpengirim" id="emailpengirim" value="">
                            </div>
                            <br>
                            <div class="p">
                                <div class="col-md-8">Nama Penerima</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="namapenerima" type='text'>
                                </div>
                            </div>
                            <br>
                        </div>

                        {{-- ----- --}}

                        <div class="col-sm-12 col-md-6 form-group">

                            <div class="p ">
                                <div class="col-md-6">No Resi</div>
                                <div>:</div>
                                <div class="col-md-6"><input name="noresi" type='text' >
                                </div>
                            </div>
                            <br>
                            <div class="p ">
                                <div class="col-md-6">No Transaksi</div>
                                <div>:</div>
                                <div class="col-md-6"><input name="notransaksi" type='text'value="{{$kodeTrans}}" readonly>
                                </div>
                            </div>
                            <br>
                            <div class="p ">
                                <div class="col-md-6">Nama Barang</div>
                                <div>:</div>
                                <div class="col-md-6"><input name="namabarang" type='text'>
                                </div>
                            </div>
                            <br>
                            <div class="p ">
                                <div class="col-md-6">No Container</div>
                                <div>:</div>
                                <div class="col-md-6"><input name="nocontainer" type='text'>
                                </div>
                            </div>
                            <br>
                            <center><button type="submit" class="btn btn-primary">Tambah</button></center>                            <br>
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
                                <center>No Transaksi</center>
                            </th>
                            <th scope="col">
                                <center>Nama Penerima</center>
                            </th>
                            <th scope="col">
                                <center>Nama Pengirim</center>
                            </th>
                            <th scope="col">
                                <center>Nama Barang</center>
                            </th>
                            <th scope="col">
                                <center>No Resi</center>
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
                                    <center>{{ $prm->nomor_transaksi }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nama_penerima }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nama_pengirim }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nama_barang }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nomor_resi }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nomor_container }}</center>
                                </th>
                                <th scope="col">
                                    <center style="display: flex;">
                                        <button style="height: 29px;" class="btn" id="btnedit" data-toggle="modal"
                                            data-target="#myModal" onclick="btnedit({{ $ctr - 1 }})"><i
                                                class="fa fa-pencil-alt"></i></button>

                                        <form method="post"
                                            action="{{ url('masterCustomer/delete/' . $prm->id_customer) }}">
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
            </table>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
      var kode = $arrTransaksi.length;
        document.getElementById("kode").value = kode;
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
    // $(document).ready(function() {
    //     $('#user').keyup(function() {
    //         var query = $(this).val();
    //         if (query != '') {
    //             $.ajax({
    //                 url: "autocomplete.php",
    //                 method: "POST",
    //                 data: {
    //                     query: query,
    //                     ctr: "Fhistory"
    //                 },
    //                 success: function(data) {
    //                     $('#userList').fadeIn();
    //                     $('#userList').html(data);
    //                 }
    //             });
    //         }
    //     });
    //     $(document).on('click', 'li', function() {
    //         $('#user').val($(this).text());
    //         $('#userList').fadeOut();
    //         $.ajax({
    //             url: "autocomplete.php",
    //             method: "POST",
    //             data: {
    //                 query: $(this).text(),
    //                 ctr: "Fhistorynama"
    //             },
    //             success: function(data) {
    //                 $("[name='ncustomer']").val(data);
    //             }

    //         });
    //         $.ajax({
    //             url: "autocomplete.php",
    //             method: "POST",
    //             data: {
    //                 query: $(this).text(),
    //                 ctr: "Fhistorytanggal"
    //             },
    //             success: function(data) {
    //                 $("[name='ntanggal']").val(data);
    //             }
    //         });
    //         $.ajax({
    //             url: "autocomplete.php",
    //             method: "POST",
    //             data: {
    //                 query: $(this).text(),
    //                 ctr: "Fhistorynamakapal"
    //             },
    //             success: function(data) {
    //                 $("[name='nkapal']").val(data);
    //             }
    //         });
    //         $.ajax({
    //             url: "autocomplete.php",
    //             method: "POST",
    //             data: {
    //                 query: $(this).text(),
    //                 ctr: "Fhistorynocontainer"
    //             },
    //             success: function(data) {
    //                 $("[name='ncontainer']").val(data);
    //             }
    //         });
    //     });
    // });
    $(document).ready(function(){
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
            $("#wrapper").css("display", "none");
            // document.getElementById('livesearch').value = "yes";
            const getID = $(this).text().split('-');
            document.getElementById("alamatpengirim").value = $('#'+getID[0]).data('alamat');
            document.getElementById("nohppengirim").value = $('#'+getID[0]).data('hp');
            document.getElementById("emailpengirim").value = $('#'+getID[0]).data('email');
        });
    });
    $("#wrapper").css("display", "none");
    // $("#wrapper_resi").css("display", "none");

    $("#user").on("input", function(){
        if($("#user").val()==""){
            $("#wrapper").css("display", "none");
        }else{
            $("#wrapper").css("display", "block");
        }
    });
</script>
