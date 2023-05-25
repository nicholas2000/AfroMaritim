{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" /> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<style>
    .list li {
        background-color: aliceblue;
        cursor: pointer;
        padding: 12px;
    }
</style>

</html>
@if ($errors->any())
    @foreach ($errors->all() as $err)
        <div class="alert alert-danger">{{ $err }}</div>
    @endforeach
@endif
<section class="order-form m-4">

    <div class="container pt-4">
        <div class="container">

            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h1> Manifest Kontainer</h1>
                        <hr class="mt" />
                    </div>
                </div>
            </div>
            <br>
            <form action="{{ url('/doMasterTransaksi') }} " method="post">
                @csrf
                {{-- FORM --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Nomor Container :
                        </div>
                        <div class="col-sm">
                            <input name="nocontainer" id="nocontainer" class="form-control" type="text"
                                style="width: 210px;" value="" readonly>
                        </div>

                        <div class="col-sm-3">
                            Nomor Resi :
                        </div>
                        <div class="col-sm-3">
                            <div class="search-box">
                                <input style="width: 210px;" type="text" name="nomor_resi" id="resi"
                                    class="form-control" placeholder="Masukkan No Resi" />
                                <div id="wrapper_resi" onclick="hidden()">
                                    <div class="scrollbar">
                                        <div class="list force-overflow" id="resiList" style="width: 210px;"></div>
                                    </div>
                                </div>
                                {{-- <div id="result_resi"></div> --}}
                            </div>

                        </div>
                        {{-- <div class="col-sm">
                            <input name="nomor_segel" class="form-control" type="text"style="width: 210px;">
                        </div> --}}
                    </div>
                </div>
                <hr>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Nama Pengirim :
                        </div>
                        <div class="col-sm-3">
                            <div class="search-box">
                                <input style="width: 210px;" type="text" name="nama_pengirim" id="user"
                                    class="form-control" placeholder="Masukkan Nama" />
                                <div id="wrapper" onclick="hidden()">
                                    <div class="scrollbar">
                                        <div class="list force-overflow" id="userList" style="width: 210px;"></div>
                                    </div>
                                </div>
                                {{-- <div id="result"></div> --}}
                            </div>

                        </div>
                        <div class="col-sm-3">
                            Nama Penerima :
                        </div>
                        <div class="col-sm">
                            <input name="nama_penerima" id="nama_penerima" class="form-control"
                                type="text"style="width: 210px;">
                        </div>

                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Alamat Pengirim :
                        </div>
                        <div class="col-sm">
                            <input name="alamat_pengirim" id="alamat_pengirim" class="form-control"
                                type="text"style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            Alamat Penerima :
                        </div>
                        <div class="col-sm">
                            <input name="alamat_penerima" id="alamat_penerima" class="form-control"
                                type="text"style="width: 210px;">
                        </div>
                    </div>
                </div>
                {{--  --}}
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            No HP Pengirim :
                        </div>
                        <div class="col-sm">
                            <input name="nohp_pengirim" id="nohp_pengirim" class="form-control"
                                type="text"style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            No HP Penerima :
                        </div>
                        <div class="col-sm">
                            <input name="nohp_penerima" id="nohp_penerima" class="form-control"
                                type="text"style="width: 210px;">
                        </div>
                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Email Pengirim :
                        </div>
                        <div class="col-sm">
                            <input name="email_pengirim" id="email_pengirim" class="form-control"
                                type="text"style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            Email Penerima :
                        </div>
                        <div class="col-sm">
                            <input name="email_penerima" id="email_penerima" class="form-control"
                                type="text"style="width: 210px;">
                        </div>
                    </div>
                </div>
                <hr>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Jenis Barang :
                        </div>
                        <div class="col-sm">
                            <input name="nama_barang" id="nama_barang" class="form-control"
                                type="text"style="width: 210px;">
                        </div>

                        <div class="col-sm-3">
                            Jenis Harga :
                        </div>
                        <div class="col-sm-3">
                            <div class="col-auto">
                                <select name="jenisharga" class="custom-select"
                                    style="font-size:15px;width: 210px;margin-left:-15px;height:40px;" id="jenisharga"
                                    onchange="choose_harga()">
                                    <option value="-,-,0"></option>
                                    @foreach ($arrJenisHarga as $prm)
                                        <option
                                            value="{{ $prm->tipe }},{{ $prm->jenis_harga }},{{ $prm->nominal }}">
                                            {{ $prm->tipe }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Jenis Ukuran :
                        </div>
                        <div class="col-sm-3">
                            <div class="col-auto">
                                <select name="jenis_ukuran" class="custom-select"
                                    style="font-size:15px;width: 210px;margin-left:-15px;height:40px;"
                                    id="jenis_ukuran" onchange="choose_ukuran()">
                                    <option value="Berat">Berat</option>
                                    <option value="Volume">Volume</option>
                                </select>
                            </div>
                            {{-- <input type="radio" name="jenis_ukuran" id="jenis_ukuran" value="Berat" checked>Berat
                            <input type="radio" name="jenis_ukuran" id="jenis_ukuran" value="Volume">Volume --}}
                        </div>
                        <div class="col-sm-3">
                            Harga / Kubik :
                        </div>
                        <div class="col-sm-3">
                            <input name="harga_kubik" id="harga_kubik" class="form-control"
                                type="number"style="width: 210px;" value="0">
                        </div>
                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            Volume :
                        </div>
                        <div class="col-sm-3">
                            <input name="nominal_ukuran" id="nominal_ukuran" class="form-control"
                                type="number"style="width: 210px;" value="0" disabled>
                        </div>
                        <div class="col-sm">
                            Berat :
                        </div>
                        <div class="col-sm-3">
                            <input name="nominal_ukuran_berat" id="nominal_ukuran_berat" class="form-control"
                                type="number"style="width: 210px;" value="0">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            Harga by Jenis :
                        </div>
                        <div class="col-sm">
                            <input name="harga_jenis" id="harga_jenis" class="form-control"
                                type="number"style="width: 210px;" value="0" readonly>
                        </div>
                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Jumlah Barang:
                        </div>
                        <div class="col-sm">
                            <input name="colly" id="jumlah_barang" class="form-control"
                                type="text"style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            Harga Tambahan:
                        </div>
                        <div class="col-sm">
                            <input name="harga_tambahan" id="harga_tambahan" class="form-control" type="number"
                                style="width: 210px;" value="0">
                        </div>
                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Nama Kapal :
                        </div>
                        <div class="col-sm">
                            <input name="nama_kapal" id="nama_kapal" class="form-control"
                                type="text"style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            Harga Potongan :
                        </div>
                        <div class="col-sm">
                            <input name="harga_potongan" id="harga_potongan" class="form-control" type="number"
                                value="0" style="width: 210px;">
                        </div>
                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Tanggal Berangkat :
                        </div>
                        <div class="col-sm">
                            <input name="tglberangkat" id="tanggal" class="form-control"
                                type="date"style="width: 210px;">
                        </div>

                        <div class="col-sm-3">
                            Total Harga :
                        </div>
                        <div class="col-sm">
                            <input name="total" id="total" class="form-control"
                                type="number"style="width: 210px;" value="0" readonly>
                        </div>
                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">

                        <div class="col-sm"></div>
                        <div class="col-sm-3">
                            <br>
                            <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <input type="hidden" name="option" id="option" value="berat">
                            <input type="hidden" name="livesearch" id="livesearch" value="no">
                            <input type="hidden" name="update" id="update" value="no">
                            {{-- {{$total}} --}}
                        </div>

                    </div>
                </div>
            </form>
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

    $(document).ready(function() {
        //resi
        $('#resi').keyup(function() {
            var query = $(this).val();
            if (query != '') {
                $.ajax({
                    url: "autocomplete.php",
                    method: "POST",
                    data: {
                        query: query,
                        ctr: "Fnoresi"
                    },
                    success: function(data) {
                        if (data.length > 1) {
                            $('#resiList').fadeIn();
                            $('#resiList').html(data);
                        } else {
                            $('#resiList').fadeOut();
                            $('#resiList').html("");
                            $("#wrapper_resi").css("display", "none");
                        }
                    }
                });
            }
        });
        $(document).on('click', '#package_resi li', function() {
            $('#resi').val($(this).text());
            $('#resiList').fadeOut();
            $("#wrapper_resi").css("display", "none");
            document.getElementById('update').value = "yes";
            const getID = $(this).text();
            document.getElementById("nocontainer").value = $('#' + getID).data('nomorcontainer');
            document.getElementById("user").value = $('#' + getID).data('pengirim');
            document.getElementById("alamat_pengirim").value = $('#' + getID).data('alamatpengirim');
            document.getElementById("nohp_pengirim").value = $('#' + getID).data('nohppengirim');
            document.getElementById("email_pengirim").value = $('#' + getID).data('emailpengirim');
            document.getElementById("nama_penerima").value = $('#' + getID).data('penerima');
            document.getElementById("alamat_penerima").value = $('#' + getID).data('alamatpenerima');
            document.getElementById("nohp_penerima").value = $('#' + getID).data('nohppenerima');
            document.getElementById("email_penerima").value = $('#' + getID).data('emailpenerima');
            document.getElementById("nama_barang").value = $('#' + getID).data('namabarang');
            $('#jenis_ukuran').val($('#' + getID).data('jenisukuran'));
            document.getElementById("nominal_ukuran").value = $('#' + getID).data('nominalukuran');
            document.getElementById("nominal_ukuran_berat").value = $('#' + getID).data('nominalukuranberat');
            document.getElementById("jumlah_barang").value = $('#' + getID).data('jumlah');
            document.getElementById("nama_kapal").value = $('#' + getID).data('namakapal');
            document.getElementById("tanggal").value = $('#' + getID).data('tanggal');
            $('#jenisharga').val($('#' + getID).data('jenisharga'));
            document.getElementById("harga_kubik").value = $('#' + getID).data('hargakubik');
            document.getElementById("harga_jenis").value = $('#' + getID).data('harga');
            document.getElementById("harga_tambahan").value = $('#' + getID).data('hargatambahan');
            document.getElementById("harga_potongan").value = $('#' + getID).data('hargapotongan');
            document.getElementById("total").value = $('#' + getID).data('totalharga');
        });


        //user
        $('#user').keyup(function() {
            var query = $(this).val();
            if (query != '') {
                $.ajax({
                    url: "autocomplete.php",
                    method: "POST",
                    data: {
                        query: query,
                        ctr: "Ftransdepo"
                    },
                    success: function(data) {
                        if (data.length > 1) {
                            $('#userList').fadeIn();
                            $('#userList').html(data);
                        } else {
                            $('#userList').fadeOut();
                            $('#userList').html("");


                        }
                    }
                });
            }
        });
        $(document).on('click', '#package_nama li', function() {
            $('#user').val($(this).text());
            $('#userList').fadeOut();
            document.getElementById('livesearch').value = "yes";
            const getID = $(this).text().split('-');
            document.getElementById("alamat_pengirim").value = $('#' + getID[0]).data('alamat');
            document.getElementById("nohp_pengirim").value = $('#' + getID[0]).data('hp');
            document.getElementById("email_pengirim").value = $('#' + getID[0]).data('email');
        });
        var kode = $arrTransaksi.length;
        document.getElementById("kode").value = kode;
    });
    //nama
    // $("#wrapper").css("display", "none");
    // $("#wrapper_resi").css("display", "none");

    document.getElementById("#wrapper").css.display = "none";
    document.getElementById("#wrapper_resi").css.display = "none";

    $("#user").on("input", function() {
        if ($("#user").val() == "") {
            $("#wrapper").css("display", "none");
        } else {
            $("#wrapper").css("display", "block");
        }
    });
    $("#resi").on("input", function() {
        if ($("#resi").val() == "") {
            $("#wrapper_resi").css("display", "none");
        } else {
            $("#wrapper_resi").css("display", "block");
        }
    });

    //jenis_ukuran
    // function

    //jenis_harga
    function choose_harga() {
        var arrJenis = $("#jenisharga").val().split(",");
        if (arrJenis[1] == "-") {
            document.getElementById("harga_jenis").value = Number($('#harga_kubik').val());
        } else {
            var hargaKubik = Number($('#harga_kubik').val());
            if (arrJenis[1] != $("#jenis_ukuran").val()) {
                $('#jenisharga').val("-,-,0");
                document.getElementById("harga_jenis").value = hargaKubik;
            } else {
                ganti_harga_jenis();
            }
        }
        // document.getElementById("harga").value = arrJenis[1];
        total_harga();
    }

    function choose_ukuran() {
        // var arrJenis = $("#jenisharga").val().split(",");
        // var hargaKubik = Number($('#harga_kubik').val());
        // if (arrJenis[1] != $("#jenis_ukuran").val()) {
        //     $('#jenisharga').val("-,-,0");
        //     document.getElementById("harga_jenis").value = hargaKubik;
        // }
        if ($("#jenis_ukuran").val() == "Volume") {
            document.getElementById('nominal_ukuran_berat').disabled  = true;
            document.getElementById('nominal_ukuran').disabled  = false;
        } else {
            document.getElementById('nominal_ukuran_berat').disabled  = false;
            document.getElementById('nominal_ukuran').disabled  = true;
        }
    }

    function ganti_harga_jenis() {
        var arrJenis = $("#jenisharga").val().split(",");

        var berat = Number($("#nominal_ukuran").val());
        var hargaKubik = Number($('#harga_kubik').val());

        if (arrJenis[1] == "Berat") {
            document.getElementById("harga_jenis").value = berat * (hargaKubik + hargaKubik * Number(arrJenis[2]) /
            100);
        } else if (arrJenis[1] == "Volume") {
            document.getElementById("harga_jenis").value = berat * (hargaKubik + Number(arrJenis[2]));
        }
    }

    //auto_gen angka
    $("#harga_tambahan").on("input", function() {
        change_number("harga_tambahan");
        total_harga();
    });
    $("#harga_kubik").on("input", function() {
        change_number("harga_kubik");
        ganti_harga_jenis();
        total_harga();
    });
    $("#nominal_ukuran").on("input", function() {
        change_number("nominal_ukuran");
        ganti_harga_jenis();
        total_harga();
    })
    $("#harga_potongan").on("input", function() {
        change_number("harga_potongan");
        total_harga();
    })

    function change_number(direct) {
        var temp = $("#" + direct).val();
        var changer = Number(temp);
        document.getElementById(direct).value = "" + changer;
    }

    function total_harga() {
        var harga = Number(document.getElementById("harga_jenis").value);
        var tambahan = Number(document.getElementById("harga_tambahan").value);
        var potongan = Number(document.getElementById("harga_potongan").value);
        document.getElementById("total").value = harga + tambahan - potongan;
    }
</script>
