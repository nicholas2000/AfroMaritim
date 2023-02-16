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
    .userList {
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
                        <h3> Depo</h3>
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
                                <div class="col-md-2"><input name="tglmasuk" type="date" value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                            </div>
                            <br>
                            <div class="p">
                                <div class="col-md-8">Nama Penerima</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="namapenerima" type='text' style="width: 180px;">
                                </div>
                            </div>
                            <br>
                            <div class="p">
                                <div class="col-md-8">Nama Pengirim</div>
                                <div>:</div>
                                <div class="col-md-2"><input name="namapengirim" type='text' style="width: 180px;">
                                </div>
                            </div>
                            <br>
                        </div>

                        {{-- ----- --}}

                        <div class="col-sm-12 col-md-6 form-group">

                            <div class="p ">
                                <div class="col-md-6">No Resi</div>
                                <div>:</div>
                                <div class="col-md-6"><input name="noresi" type='text' style="width: 180px;">
                                </div>
                            </div>
                            <br>
                            <div class="p ">
                                <div class="col-md-6">No Transaksi</div>
                                <div>:</div>
                                <div class="col-md-6"><input name="notransaksi" type='text' style="width: 180px;">
                                </div>
                            </div>
                            <br>
                            <div class="p ">
                                <div class="col-md-6">Nama Barang</div>
                                <div>:</div>
                                <div class="col-md-6"><input name="namabarang" type='text' style="width: 180px;">
                                </div>
                            </div>
                            <br>
                            <div class="p ">
                                <div class="col-md-6">No Container</div>
                                <div>:</div>
                                <div class="col-md-6"><input name="nocontainer" type='text' style="width: 180px;">
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
                            <th scope="col">
                                <center></center>
                            </th>
                        </tr>
                        <?php $ctr = 1; ?>

                        {{-- @foreach ()
                            <tr> --}}

                                {{-- <th scope="row">{{ $ctr }}</th>
                                <th scope="col">
                                    <center>{{ $prm->nomor_transaksi }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->Customer->nama_customer }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nama_kapal }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->no_container }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nomor_manifest }}</center>
                                </th> --}}
                                {{-- <th scope="col" style="display: flex"> --}}
                                    {{-- <a href="./delete/{{$prm->nomor_transaksi}}" class="btn btn-danger" style="">Delete</a> --}}
                                    {{-- <form action="" method="">
                                        @csrf
                                        <button name=""type="submit" class="btn btn"><i class="fa fa-pencil-alt"></i></button>
                                    </form>
                                    <form method="post"
                                        action="{{ url('masterHistory/delete/' . $prm->nomor_transaksi) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form> --}}
                                {{-- </th>
                                <th >
                                    <input type="checkbox"  value="{{$prm->nomor_transaksi}}" onclick="myFunction(this)">
                                </th> --}}

                            {{-- </tr>
                            <?php $ctr++; ?>
                        @endforeach --}}
                    </table>
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
</script>
