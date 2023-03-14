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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/table2excel@1.0.4/dist/table2excel.min.js"></script> --}}
<style>
    .ps {
        display: flex;
        width: 100%;
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
<section class="ophp artisan route:clearrder-form m-4">
    <div class="container pt-4">
        <div class="container">
            <h1> Gudang </h1>
            <div class="row ">
                <input type="hidden" name="data">
                <div class=" col-sm-12 col-md-6form-group">
                    <div class="ps">
                        <div style="display:flex">
                            <div class="col-md-1" style="margin-left: -3%;">Container</div>
                            <div class="col-md-4">
                                <select style="width: 180px;height: 35px; margin-left:20%;"
                                    class="form-control selectpicker">
                                    @foreach ($arrHistory as $prm)
                                        <option value="{{ $prm->tipe }},{{ $prm->jenis_harga }},{{ $prm->nominal }}">
                                            {{ $prm->tipe }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-10">
                                <form action="{{ url('/search_tanggal') }}" method="get">

                                    <div class="form-group" style="margin-right:10px;">
                                        <div style="display: flex;">
                                            <input type="date" class=" form-control"
                                                style="margin-right: 10px;width: 150px;"
                                                placeholder="&#xf133;  Tgl Awal" id="currentDate" name="date_awal">
                                            <input type="date" class=" form-control"
                                                style="margin-right: 10px;width: 150px;"
                                                placeholder="&#xf133;  Tgl Akhir" name="date_akhir">
                                            <button type="submit" class="btn btn-success">Cari</button>
                                        </div>

                                </form>
                            </div>
                        </div>


                        <script>
                            var today = new Date();
                            var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                            // document.getElementById("currentDate").value = date;
                            console.log(date);
                        </script>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-6 form-group" style="display: flex">
                    <div class="col-md-12"></div>
                    <div class="col-md-11"></div>
                    <div class="col-md-3" style="display:flex;">
                        <a href="" class="btn btn-primary" style="color: white;height: 37px;margin-right: 5%;"
                            class="ps">Import</a>
                        <a href="" id="btn-excel" class="btn btn-success"
                            style="color: white;height: 37px;">Export</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-6 form-group">
                        <div class="ps">
                            <div class="col-md-4">Nama Kurir</div>
                            <div>:</div>
                            <div class="col-md-3">
                                <select name="namakurir" style="height:35px; width: 180px; "
                                    class="form-control selectpicker">
                                    <option value="">Pilih Kurir</option>
                                    <option>Kurir 1</option>
                                    <option>Kurir 2</option>
                                    <option>Kurir 3</option>
                                    <option>Kurir 4</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <br>

                        {{-- ----- --}}
                    </div>
                    <div class="col-sm-12 col-md-6 form-group">

                        <div class="ps ">
                            <div class="col-sm-5">Total Barang Diantar</div>
                            <div>:</div>
                            <div class="col-sm-3">
                                <input style="width: 180px;"type='text' name="barang" disabled>
                            </div>
                        </div>
                        <br>

                        <br>
                        <a href=""class="btn btn-primary" style="float: right">Masukkan Barang</a>
                        <br>
                    </div>

                    <div class="col-12">
                        <table id="datatables" class="table table-bordered">

                            <tr style="background-color:  #023e94;color: white;">
                                <th scope="col">
                                    <center><input type="checkbox" name="cball" id="cball"></center>
                                </th>
                                <th scope="col">
                                    <center> No </center>
                                </th>
                                <th scope="col">
                                    <center> No Transaksi </center>
                                </th>
                                <th scope="col">
                                    <center>Tanggal Pengiriman</center>
                                </th>
                                <th scope="col">
                                    <center>Status Barang</center>
                                </th>
                                <th scope="col">
                                    <center>Link Foto</center>
                                </th>

                            </tr>
                            <?php $ctr = 1; ?>

                            @foreach ($arrHistory as $prm)
                                <tr>
                                    <th>
                                        <input type="checkbox" value="{{ $prm->nomor_transaksi }}"
                                            onclick="myFunction(this)">
                                    </th>
                                    <th scope="row">{{ $ctr }}</th>
                                    <th scope="col">
                                        <center>{{ $prm->nomor_resi }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->tanggal }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->status_barang }}</center>
                                    </th>
                                    <th scope="col" style="display: flex">
                                        {{-- <a href="./delete/{{$prm->nomor_transaksi}}" class="btn btn-danger" style="">Delete</a> --}}
                                        <form action="" method="">
                                            @csrf
                                            <button name=""type="submit" class="btn btn"><i
                                                    class="fa fa-pencil-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                <?php $ctr++; ?>
                            @endforeach



                        </table>
                    </div>

                </div>
            </div>
        </div>
</section>
<script>
    var data2 = [];

    function myFunction(x) {
        if (x.checked == true) {
            data2.push(x.value);

        } else {
            data2.splice(data2.indexOf(x.value), 1);
        }

        $("[name='barang']").val(data2.length);
        console.log(data2);
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
