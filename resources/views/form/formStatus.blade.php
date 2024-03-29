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
<section class="order-form m-4">
    <div class="container pt-4">
        <div class="container">
            @if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif
            <h1> Kapal Tiba </h1>
            <div class="row ">
                <div class="col-md-12 form-group">
                    <div class="ps">

                        <div class="col-md-10">
                            <form action="{{ url('/search_tanggal') }}" method="get">

                                <div class="form-group" style="margin-right:10px;">
                                    <div style="display: flex;">
                                        <input type="date" class=" form-control" style="margin-right: 10px;width: 150px;" placeholder="&#xf133;  Tgl Awal" id="currentDate" name="date_awal">
                                        <input type="date" class=" form-control" style="margin-right: 10px;width: 150px;" placeholder="&#xf133;  Tgl Akhir" name="date_akhir">
                                        <button type="submit" class="btn btn-success">Cari</button>
                                    </div>

                            </form>
                        </div>

                        <script>
                            var today = new Date();
                            var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                            // document.getElementById("currentDate").value = date;
                            console.log(date);

                        </script>
                    </div>
                    <div class="col-md-3">
                        <a href="" class="btn btn-primary" style="color: white;height: 37px;margin-right: 5%;" class="ps">Import</a>
                        <a href="" id="btn-excel" class="btn btn-success" style="color: white;height: 37px;">Export</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <form action="{{ url('/showstatus') }}" method="get">
        </form>
        <div class="row">
            <div class="col-sm-12 col-md-12 form-group">
                <form action="{{ url('/updateStatus') }}" method="POST">
                    @csrf
                    <div class="ps ">
                        <div class="col-sm-2">Status Barang</div>
                        <div>:</div>
                        <div class="col-sm-3">
                            <select style="width: 180px;height: 35px;" class="form-control selectpicker" name="status">
                                <option value="">Pilih Status Barang</option>
                                <option>Stuffing</option>
                                <option>Stacking</option>
                                <option>On Board</option>
                                <option>ATCY</option>
                                <option>At Consignee</option>
                                <option>Empty</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <br>
                    <input type="hidden" name="data">
                    <div class="col-xl-10">
                        <button type="submit" class="btn btn-primary" style="float: right">Update</a>
                    </div>

                </form>

                <br>
            </div>

            <div class="col-12">
                <table id="datatables" class="table table-bordered">

                    <tr style="background-color:  #023e94;color: white;">
                        <td>
                            <center><input type="checkbox"> </center>
                        </td>
                        <th scope="col">
                            <center>No</center>
                        </th>
                        <th scope="col">
                            <center> No Kontainer</center>
                        </th>
                        <th scope="col">
                            <center>Nomor Segel</center>
                        </th>
                        <th scope="col">
                            <center>Isi Kontainer</center>
                        </th>
                        <th scope="col">
                            <center>Nama Kapal</center>
                        </th>
                        <th scope="col">
                            <center>Status</center>
                        </th>
                    </tr>

                    <?php $ctr = 1; ?>

                    @foreach ($arrTransaksi as $prm)
                    <tr>

                        <td>
                            <center><input type="checkbox" value="{{ $prm->nomor_manifest }}" onclick="myFunction(this)"></center>
                        </td>
                        <th scope="row">{{ $prm->nomor_manifest }}</th>
                        <td>{{ $prm->nomor_container }}</td>
                        <td>{{ $prm->nomor_segel }}</td>
                        <td>{{ $prm->jenis_barang }}</td>
                        <td>{{ $prm->nama_kapal }}</td>

                        <td>{{ $prm->status_barang }}</td>
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
        console.log("asd");
        if (x.checked == true) {
            data2.push(x.value);
        } else {
            data2.splice(data2.indexOf(x.value), 1);
        }
        $("[name='data']").val(JSON.stringify(data2));
    }

    // function toggle(source) {
    //     checkboxes = document.getElementsByName('checkb');
    //     for (var i = 0, n = checkboxes.length; i < n; i++) {
    //         checkboxes[i].checked = source.checked;
    //     }
    // }

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
        }
        , autoclose: true

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
        }
        , autoclose: true

    }).on('changeDate', function(ev) {});

    document.getElementById("btn-excel").addEventListener("click", () => {
        let table2excel = new Table2Excel();
        table2excel.export(document.querySelector("#datatables"));
    });




</script>
