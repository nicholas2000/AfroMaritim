<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
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
    .scrollbar
{
	float: left;
	height: 120px;
	width: 210px;
	background: #F5F5F5;
	overflow-y: scroll;
}

.force-overflow
{
	min-height: 200px;
}

#wrapper
{
	width: 500px;
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
                        <h1> Master Transaksi</h1>
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
                            Nomor Transaksi :
                        </div>
                        <div class="col-sm">
                            <input name="kode" id="kode" class="form-control" type="text" style="width: 210px;" value="{{$kodeTrans}}" readonly>
                        </div>
                        <div class="col-sm-3">
                            Nama Customer :
                        </div>
                        <div class="col-sm-3">
                            <div class="search-box">
                                <input style="width: 210px;" type="text" name="namacust" id="user" class="form-control" placeholder="Masukkan Nama" />
                                <br>
                                <div id="wrapper" onclick="hidden()">
                                    <div class="scrollbar">
                                        <div class="userList force-overflow" id="userList" style="width: 210px;"></div>
                                    </div>
                                </div>
                                <div id="result"></div>
                            </div>

                        </div>


                    </div>
                </div>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Jenis Barang :
                        </div>
                        <div class="col-sm">
                            <input name="namabarang" class="form-control" type="text"style="width: 210px;" >
                        </div>


                        <div class="col-sm-3">
                            Admin :
                        </div>
                        <div class="col-sm">
                            <input name="kode" class="form-control" type="text"style="width: 210px;" readonly>
                        </div>

                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Alamat :
                        </div>
                        <div class="col-sm">
                            <input name="namabarang" class="form-control" type="text"style="width: 210px;" >
                        </div>

                        <div class="col-sm-3">
                            Nomor Container :
                        </div>
                        <div class="col-sm">
                            <input name="nocontainer" class="form-control" type="text"style="width: 210px;">
                        </div>

                    </div>
                </div>
{{--  --}}
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-1">
                            Berat :
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="option1" id="option1" value="op1" onclick="disable_option1()" checked>
                        </div>
                        <div class="col-sm-3">
                            <input name="berat" id="berat" class="form-control" type="number"style="width: 210px;" value="0" step=".01">
                        </div>
                        <div class="col-sm-1">
                            Volume :
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="option2" id="option2" value="op2" onclick="disable_option2()">
                        </div>
                        <div class="col-sm-1">
                            <input name="volume" id="volume" class="form-control" type="number"style="width: 210px;" value="0">
                        </div>
                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Rute :
                        </div>
                        <div class="col-sm">
                            <input name="rute" class="form-control" type="text"style="width: 210px;" >
                        </div>
                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Jenis Harga :
                        </div>
                        <div class="col-sm-3">
                            <div class="col-auto">
                                <select name="jenisharga" class="custom-select" style="font-size:15px;width: 210px;margin-left:-15px;height:40px;"
                                    id="jenisharga" onchange="choose_harga()">
                                    <option value="-,0"></option>
                                    @foreach ($arrJenisHarga as $prm)
                                        <option value="{{ $prm->tipe }},{{ $prm->nominal }}">{{ $prm->tipe }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            Harga :
                        </div>
                        <div class="col-sm">
                            <input name="harga" id="harga" class="form-control" type="number" style="width: 210px;" value="0">
                        </div>
                    </div>
                </div>
                <br>
                {{--  --}}
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Persentase :
                        </div>
                        <div class="col-sm">
                            <input name="persentase" class="form-control" type="text"style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            Harga Tambahan :
                        </div>
                        <div class="col-sm">
                            <input name="hargatambahan" id="hargatambahan" class="form-control" type="number" value="0" style="width: 210px;">
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
                            <input name="namakapal" class="form-control" type="text"style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            Total Harga :
                        </div>
                        <div class="col-sm">
                            <input name="total" id="total" class="form-control" type="number"style="width: 210px;" value="0" readonly>
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
                            <input name="tglberangkat" class="form-control" type="date"style="width: 210px;">
                        </div>

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
                            {{$kodeTrans}}
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
</script>

<script>
    $(document).ready(function(){
        $('#user').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url:"autocomplete.php",
                    method:"POST",
                    data:{query:query,ctr:"Ftrans"},
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
            $("#wrapper").css("display", "none");
        });
        var kode = $arrTransaksi.length;
        document.getElementById("kode").value = kode;
    });

    //volume atau berat
    document.getElementById("volume").readOnly = true;

    function disable_option2() {
        document.getElementById("volume").readOnly = false;
        document.getElementById("berat").readOnly = true;
        document.getElementById("berat").value = "0";
        document.getElementById("volume").value = "0";
        document.getElementById("option").value = "volume";
        document.getElementById("option1").checked = false;
        total_harga();
    }
    function disable_option1() {
        document.getElementById("volume").readOnly = true;
        document.getElementById("berat").readOnly = false;
        document.getElementById("berat").value = "0";
        document.getElementById("volume").value = "0";
        document.getElementById("option").value = "berat";
        document.getElementById("option2").checked = false;
        total_harga();
    }

    //jenis_harga
    function choose_harga(){
        var arrJenis = $("#jenisharga").val().split(",");
        document.getElementById("harga").value = arrJenis[1];
        total_harga();
    }

    //nama
    $("#wrapper").css("display", "none");

    $("#user").on("input", function(){
        if($("#user").val()==""){
            $("#wrapper").css("display", "none");
        }else{
            $("#wrapper").css("display", "block");
        }
    });

    //auto_gen angka
    $("#hargatambahan").on("input", function(){
        change_number("hargatambahan");
        total_harga();
    });
    $("#berat").on("input", function(){
        change_number("berat");
        total_harga();
    });
    $("#volume").on("input", function(){
        change_number("volume");
        total_harga();
    })
    $("#harga").on("input", function(){
        change_number("harga");
        total_harga();
    })

    function change_number(direct){
        var temp = $("#" +direct).val();
        var changer = Number(temp);
        document.getElementById(direct).value = "" + changer;
    }

    function total_harga(){
        var berat = 0;
        if(document.getElementById("option1").checked == true){
            berat = Number(document.getElementById("berat").value);
        }else if(document.getElementById("option2").checked == true){
            berat = Number(document.getElementById("volume").value);
        }
        var harga = Number(document.getElementById("harga").value);
        var tambahan = Number(document.getElementById("hargatambahan").value);
        document.getElementById("total").value = berat * harga + tambahan;
    }
</script>
