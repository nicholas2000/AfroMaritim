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
            <h1> Barang </h1>
            <div class="row ">
                <div class="col-sm-8 col-md-6 form-group">
                    <div class="input-group">
                        <input type="search"  class="form-control rounded p" placeholder=" Search"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-primary" style="margin-left: 2px">Search</button>
                    </div>
                </div>
                <div class="col-sm-10 col-md-12 form-group">
                    <div class="p">
                        <div class="col-sm-1">Cari</div>
                        <div class="col-sm-2 pk" style="margin-right: 10%;">
                            <select style="width: 100px;height: 35px;" class="form-control selectpicker">
                                <option value="">Semua</option>
                                <option>Andi</option>
                                <option>Doni</option>
                                <option>Tono</option>
                                <option>Sisil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div style="display: flex;">
                                <input id="dp1" type="text" class=" fa fa-calendar form-control clickable "
                                    style="margin-right: 10px;width: 110px;" id="DtChkIn"
                                    placeholder="&#xf133;  Tgl Awal">
                                <input id="dp2" type="text" class=" fa fa-calendar form-control clickable"
                                    id="DtChkOut" style="margin-right: 10px;width: 110px;"
                                    placeholder="&#xf133;  Tgl Akhir">
                            </div>
                        </div>
                        <div style="display: flex;">
                            <a href="" class="btn btn-primary" style="color: white;height: 37px;margin-right: 5%;" class="p">Import</a>
                            <a href="" id="btn-excel" class="btn btn-success"
                                style="color: white;height: 37px;">Export</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12 col-md-6 form-group">
                    <div class="p">
                        <div class="col-md-4">ID Kapal</div>
                        <div>:</div>
                        <div class="col-md-3"><input type='text' style="width: 180px;"
                                placeholder="Masukkan ID Kapal">
                        </div>
                    </div>
                    <br>
                    <div class="p">
                        <div class="col-sm-4">Filter </div>
                        <div>:</div>
                        <div class="col-sm-3">
                            <select style="width: 180px;height: 35px;" class="form-control selectpicker">
                                <option value="">Pilih Filter</option>
                                <option>Andi</option>
                                <option>Doni</option>
                                <option>Tono</option>
                                <option>Sisil</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="p">
                        <div class="col-sm-4">Bulk Action </div>
                        <div>:</div>
                        <div class="col-sm-3">
                            <select style="width: 180px;height: 35px;" class="form-control selectpicker">
                                <option value="">Pilih Bulk Action</option>
                                <option>Andi</option>
                                <option>Doni</option>
                                <option>Tono</option>
                                <option>Sisil</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    {{-- ----- --}}
                </div>
                <div class="col-sm-12 col-md-6 form-group">

                    <div class="p ">
                        <div class="col-sm-5">Status Barang</div>
                        <div>:</div>
                        <div class="col-sm-3">
                            <select style="width: 180px;height: 35px;" class="form-control selectpicker">
                                <option value="">Pilih Status Barang</option>
                                <option>Andi</option>
                                <option>Doni</option>
                                <option>Tono</option>
                                <option>Sisil</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="p">
                        <div class="col-sm-5">Sisa Barang Terkirim</div>
                        <div>:</div>
                        <div class="col-sm-3"><input style="width: 180px;"type='text' disabled></div>
                    </div>
                    <br>
                    <a href=""class="btn btn-primary" style="float: right">Update</a>
                    <br>
                </div>

                <div class="col-12">
                    <table id="datatables" class="table table-bordered">

                        <tr style="background-color:  #023e94;color: white;">
                            <th scope="col">No Transaksi</th>
                            <th scope="col">
                                <center>Nama Customer</center>
                            </th>
                            <th scope="col">
                                <center>Tanggal Pengiriman</center>
                            </th>
                            <th scope="col">
                                <center>No Kapal</center>
                            </th>
                            <th scope="col">
                                <center>No Container</center>
                            </th>
                            <th scope="col">
                                <center>Status Barang</center>
                            </th>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td>Andi</td>
                            <td>1/9/2023</td>
                            <td>1</td>
                            <td>1</td>
                            <td>Aktif</td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </table>
                </div>

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
