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
<section class="ophp artisan route:clearrder-form m-4">
    <div class="container pt-4">
        <div class="container">
            <h1> Gudang </h1>
            <div class="row ">
                <input type="hidden" name="data">
                <div class="col-sm-10 col-md-12 form-group">
                    <div class="ps">
                        <div class="col-sm-2">Container</div>
                        <div>:</div>
                        <div class="col-sm-2 pk" style="margin-right: 10%;">
                            <select style="width: 180px;height: 35px; " class="form-control selectpicker" id="container" name="container" onchange="gantiContainer()">
                                @foreach ($arrContainer as $prm)
                                        <option value="{{$prm->nomor_container}}">{{ $prm->nama_container }}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-sm-8"></div>
                        <div style="display: flex;">
                            <a href="" class="btn btn-primary"
                                style="color: white;height: 37px;margin-right: 5%;" class="ps">Import</a>
                            <a href="" id="btn-excel" class="btn btn-success"
                                style="color: white;height: 37px;">Export</a>
                        </div>
                    </div>
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
                                @foreach ($arrKurir as $prm)
                                    <option value="{{$prm->nama_pegawai}}">{{ $prm->nama_pegawai }}</option>
                                @endforeach
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

                        <thead style="background-color:  #023e94;color: white;">
                            <th scope="col"> <center><input type="checkbox" name="cball" id="cball"></center>  </th>
                            <th scope="col"><center> No </center></th>
                            <th scope="col"><center> No Transaksi </center></th>
                            <th scope="col">
                                <center>Tanggal Pengiriman</center>
                            </th>
                            <th scope="col">
                                <center>Status Barang</center>
                            </th>
                            <th scope="col">
                                <center>Link Foto</center>
                            </th>

                        </thead>

                        <tbody id="list_transaksi">

                        </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
</section>
<script>
    $(document).ready(function (){
        var query = 'CO001';
        $.ajax({
            url:"autocomplete.php",
            method:"POST",
            data:{query:query, ctr:"Flisttransaksi"},
            success:function(data)
            {
                $('#list_transaksi').html("");
                $('#list_transaksi').append(data);
            }
        })
    });

    function gantiContainer(){
        var query = $('#container').val();
        $.ajax({
            url:"autocomplete.php",
            method:"POST",
            data:{query:query,ctr:"Flisttransaksi"},
            success:function(data)
            {
                $('#list_transaksi').html("");
                $('#list_transaksi').append(data);
            }
        });
    }

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


</script>
