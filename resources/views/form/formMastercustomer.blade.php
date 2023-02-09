<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
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

<body>
    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="container">
                <div class="col-12 ">
                    <h1> Form Master Customer</h1>
                    <hr class="mt" />
                </div>
                <br>

                <div class="col-12">
                    <a href="{{ url('/tcustomer') }}"><button style="float: right;" type="button"
                            class="btn btn-primary">Tambah</button></a>
                </div>
                <br><br>
                <div class="col-12">
                    <table class="table table-bordered">
                        <tr style="background-color:  #023e94;color: white;">
                            <th scope="col">No</th>
                            <th scope="col">
                                <center>ID Customer</center>
                            </th>
                            <th scope="col">
                                <center>ID Cabang</center>
                            </th>
                            <th scope="col">
                                <center>Nama Customer</center>
                            </th>
                            <th scope="col">
                                <center>Provinsi</center>
                            </th>
                            <th scope="col">
                                <center>Kota</center>
                            </th>
                            <th scope="col">
                                <center>Telpon</center>
                            </th>
                            <th scope="col">
                                <center>Email</center>
                            </th>
                            <th scope="col">
                                <center>Action</center>
                            </th>
                        </tr>
                        <?php $ctr = 1; ?>

                        @foreach ($arrCustomer as $prm)
                            <tr>

                                <th scope="row">{{ $ctr }}</th>
                                <th scope="col">
                                    <center>{{ $prm->id_customer }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->id_cabang }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nama_customer }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->provinsi }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->kota }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->telpon }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->email }}</center>
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
                                    <form action="{{ url('masterCustomer/edit/') }}" method="post">
                                        @csrf
                                        <label style="margin-left: 40px;">Kode</label>
                                        <input name="kode" class="form-control" type="text" readonly>

                                        <label style="margin-left: 40px;">Cabang</label>
                                        <select name="cabang" style="height:35px" class="form-control selectpicker">
                                            <option value="">Pilih Cabang</option>
                                            @foreach ($cabang as $prm)
                                                <option value="{{ $prm->id_cabang }}">{{ $prm->nama_cabang }}</option>
                                            @endforeach
                                        </select>

                                        <label style="margin-left: 40px;">Nama</label>
                                        <input name="nama" placeholder="Masukkan Nama" class="form-control"
                                            type="text">

                                        <label style="margin-left: 40px;">NPWP</label>
                                        <input onkeypress="return onlyNumberKey(event)" name="npwp"
                                            placeholder="Masukkan NPWP" class="form-control" type="text">

                                        <label style="margin-left: 40px;">Alamat</label>
                                        <input name="alamat" placeholder="Masukkan Alamat" class="form-control"
                                            type="text">

                                        <label style="margin-left: 40px;">Provinsi</label>
                                        <select name="provinsi" style="height:35px" class="form-control selectpicker">
                                            <option value="">Pilih Provinsi</option>
                                            <option>Jawa Timur</option>
                                            <option>Jawa Barat</option>
                                            <option>Jawa Tengah</option>
                                            <option>Jakarta Pusat</option>
                                        </select>

                                        <label style="margin-left: 40px;">Kota</label>
                                        <select name="kota" style="height:35px" class="form-control selectpicker">
                                            <option value="">Pilih Kota</option>
                                            <option>Surabaya</option>
                                            <option>Bandung</option>
                                            <option>Solo</option>
                                            <option>Batu</option>
                                        </select>


                                        <label style="margin-left: 40px;">Kecamatan</label>
                                        <select name="kecamatan" style="height:35px"
                                            class="form-control selectpicker">
                                            <option value="">Pilih Kecamatan</option>
                                            <option>Sidoarjo</option>
                                            <option>Malang</option>
                                            <option>Batu</option>
                                            <option>Gresik</option>
                                        </select>

                                        <label style="margin-left: 40px;">Kelurahan</label>
                                        <select name="kelurahan" style="height:35px"
                                            class="form-control selectpicker">
                                            <option value="">Pilih Kelurahan</option>
                                            <option>Kediri</option>
                                            <option>Blitar</option>
                                            <option>Batu</option>
                                            <option>Gresik</option>
                                        </select>

                                        <label style="margin-left: 40px;">Kode Pos</label>
                                        <input onkeypress="return onlyNumberKey(event)" name="kodepos"
                                            placeholder="Masukkan Kode Pos" class="form-control" type="kodepos">

                                        <label style="margin-left: 40px;">Telpon</label>
                                        <input onkeypress="return onlyNumberKey(event)" name="telpon"
                                            placeholder="Masukkan Nomer Telpon" class="form-control" type="telp">

                                        <label style="margin-left: 40px;">E-mail</label>
                                        <input name="email" placeholder="Masukkan E-Mail" class="form-control"
                                            type="email">

                                        <label style="margin-left: 40px;">Pajak</label>
                                        <select name="status" style="height:35px" class="form-control selectpicker">
                                            <option value="">Pilih Status Pajak</option>
                                            <option>Kena Pajak</option>
                                            <option>Tidak Kena Pajak</option>
                                        </select>

                                        <label style="margin-left: 40px;">Status Hutang </label>
                                        <div style="display: flex;width: 30px;height: 30px;">
                                            <input type="radio" style="margin-top: -10px;margin-left: 40px;"
                                                name="status_hutang" id="On" value="On"
                                                onclick="show1();" />
                                            Aktif
                                            <input type="radio" style="margin-top: -10px;margin-left: 10px;"
                                                name="status_hutang" id="Off" value="Off"
                                                onclick="show2();" />
                                            Tidak
                                        </div>
                                        <div id="div1">
                                            <label style="margin-left: 40px;">Total Hutang </label>
                                            <input name="batasanHutang" placeholder="Masukkan Total Hutang"
                                                class="form-control" type="text">

                                            <label style="margin-left: 40px;">Batasan Pembayaran </label>
                                            <input name="batasPembayaran" onfocus="(this.type='date')"
                                                placeholder="Masukkan Batas Waktu Pembayaran" class="form-control"
                                                type="text">

                                            <label style="margin-left: 40px;">No Rekening </label>
                                            <input onkeypress="return onlyNumberKey(event)" name="noRekening"
                                                placeholder="Masukkan No Rekening" class="form-control"
                                                type="text">

                                            <label style="margin-left: 40px;">Metode Pembayaran </label>
                                            <select name="metodePembayaran" style="height:35px"
                                                class="form-control selectpicker">
                                                <option value="">Pilih Metode Pembayaran</option>
                                                <option>Transfer</option>
                                                <option>Tunai</option>
                                            </select>
                                        </div>

                                        <input type="submit" value="Ubah" style="background-color: #023e94">
                                    </form>

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
    function btnedit(id) {
        var jArray = <?php echo json_encode($arrCustomer); ?>;
        $("[name='kode']").val(jArray[id]['id_customer']);
        $("[name='cabang']").val(jArray[id]['id_cabang']);
        $("[name='nama']").val(jArray[id]['nama_customer']);
        $("[name='npwp']").val(jArray[id]['npwp']);
        $("[name='alamat']").val(jArray[id]['jalan']);
        $("[name='provinsi']").val(jArray[id]['provinsi']);
        $("[name='kota']").val(jArray[id]['kota']);
        $("[name='kecamatan']").val(jArray[id]['kecamatan']);
        $("[name='kelurahan']").val(jArray[id]['kelurahan']);
        $("[name='telpon']").val(jArray[id]['telpon']);
        $("[name='email']").val(jArray[id]['email']);
        $("[name='kodepos']").val(jArray[id]['kode_pos']);
        if (jArray[id]['pajak'] == "Kena Pajak") {
            $("[name='status']").val("Kena Pajak");
        } else {
            $("[name='status']").val("Tidak Kena Pajak");
        }
        if (jArray[id]['status_hutang'] == "Off") {
            document.getElementById("Off").checked = true;
            document.getElementById('div1').style.display = 'none';
        } else {
            document.getElementById("On").checked = true;
            document.getElementById('div1').style.display = 'block';
        }
        $("[name='batasanHutang']").val(jArray[id]['total_hutang']);
        $("[name='batasPembayaran']").val(jArray[id]['batas_pembayaran']);
        $("[name='noRekening']").val(jArray[id]['no_rekening']);
        $("[name='metodePembayaran']").val(jArray[id]['metode_pembayaran']);

    }

    function show1() {
        document.getElementById('div1').style.display = 'block';
    }

    function show2() {
        document.getElementById('div1').style.display = 'none';
    }

    function onlyNumberKey(evt) {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>

</html>
