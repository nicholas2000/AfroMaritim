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

</head>

<body>
    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="container">
                <div class="col-12 ">
                    <h1> Form Master Pegawai</h1>
                    <hr class="mt" />
                </div>
                <br>

                <div class="col-12">
                    <a href="{{ url('/tpegawai') }}"><button style="float: right;" type="button"
                            class="btn btn-primary">Tambah</button></a>
                </div>
                <br><br>
                <div class="col-12">
                    <table class="table table-bordered">
                        <tr style="background-color:  #023e94;color: white;">
                            <th scope="col">No</th>
                            <th scope="col">
                                <center>ID Pegawai</center>
                            </th>
                            <th scope="col">
                                <center>Nama Pegawai</center>
                            </th>
                            <th scope="col">
                                <center>Alamat Pegawai</center>
                            </th>
                            <th scope="col">
                                <center>Role Pegawai</center>
                            </th>
                            <th scope="col">
                                <center>Action</center>
                            </th>
                        </tr>
                        <?php $ctr = 1; ?>

                        @foreach ($arrPegawai as $prm)
                            <tr>

                                <th scope="row">{{ $ctr }}</th>
                                <th scope="col">
                                    <center>{{ $prm->id_pegawai }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nama_pegawai }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->alamat_pegawai }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->role_pegawai }}</center>
                                </th>
                                <th scope="col">
                                    <center style="display: flex;">
                                        <button style="height: 29px; margin-left: 15%; " class="btn" id="btnedit"
                                            data-toggle="modal" data-target="#myModal"
                                            onclick="btnedit({{ $ctr - 1 }})"><i
                                                class="fa fa-pencil-alt"></i></button>
                                        <form method="post"
                                            action="{{ url('masterPegawai/delete/' . $prm->id_pegawai) }}">
                                            @csrf
                                            <button style="margin-left: 25%;" type="submit" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </center>
                                </th>
                            </tr>
                            <?php $ctr++; ?>
                        @endforeach

                    </table>
                </div>
            </div>

            {{-- <--untuk pop up menu edit--> --}}

            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Edit Pegawai</h4>
                            <button class="close" type="button" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="popup">
                                <form action="{{ url('masterPegawai/update/') }}" method="post">
                                    @csrf
                                    <label style="margin-left: 40px;">Kode</label>

                                    <input name="kode" class="form-control" type="text"
                                    placeholder="{{ $prm->id_pegawai }}" readonly>

                                    @foreach ($cabang as $prm)
                                    <label style="margin-left: 40px;">Cabang</label>
                                        <select name="cabang" style="height:35px" class="form-control selectpicker">
                                            <option value="">Pilih Cabang</option>
                                            @foreach ($cabang as $prm)
                                                <option value="{{ $prm->id_cabang }}">{{ $prm->nama_cabang }}</option>
                                            @endforeach
                                        </select>
                                    <select name="cabang" style="height:35px" class="form-control selectpicker"  >

                                        <option value="">Pilih Cabang</option>
                                        {{-- @foreach ($cabang as $prm) --}}
                                            <option value="{{ $prm->id_cabang }}">{{ $prm->nama_cabang }}</option>
                                        @endforeach
                                    </select>

                                    <label style="margin-left: 40px;">Nama</label>
                                    <input name="nama" placeholder="Masukan Nama" class="form-control"
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

                                    <label style="margin-left: 40px;">Kode Pos</label>
                                    <input onkeypress="return onlyNumberKey(event)" name="kodepos"
                                        placeholder="Masukkan Kode Pos" class="form-control" type="text">

                                    <label style="margin-left: 40px;">HP</label>
                                    <input onkeypress="return onlyNumberKey(event)" name="hp"
                                        placeholder="Masukkan Nomer HP" class="form-control" type="telp">

                                    <label style="margin-left: 40px;">Telpon</label>
                                    <input onkeypress="return onlyNumberKey(event)" name="telpon"
                                        placeholder="Masukkan Nomer Telpon" class="form-control" type="telp">


                                    <label style="margin-left: 40px;">E-mail</label>
                                    <input name="email" placeholder="Masukkan E-Mail"
                                        class="form-control"type="email">

                                    <label style="margin-left: 40px;">Role</label>
                                    <select name="role" style="height:35px" class="form-control selectpicker">
                                        <option value="">Pilih Role</option>
                                        <option>Super Admin</option>
                                        <option>Accounting</option>
                                        <option>Supervisor</option>
                                        <option>Pegawai</option>
                                        <option>Kurir</option>
                                    </select>
                                    <input type="submit" value="Ubah" style="background-color: #023e94">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</body>


</html>

<script>
    function btnedit(id)
    {
        var jArray = <?php echo json_encode($arrPegawai); ?>;
        $("[name='kode']").val(jArray[id]['id_pegawai']);
        $("[name='cabang']").val(jArray[id]['id_cabang']);
        $("[name='nama']").val(jArray[id]['nama_pegawai']);
        $("[name='npwp']").val(jArray[id]['npwp_pegawai']);
        $("[name='alamat']").val(jArray[id]['alamat_pegawai']);
        $("[name='provinsi']").val(jArray[id]['provinsi_pegawai']);
        $("[name='kota']").val(jArray[id]['kota_pegawai']);
        $("[name='kodepos']").val(jArray[id]['kodepos_pegawai']);
        $("[name='hp']").val(jArray[id]['nohp_pegawai']);
        $("[name='telpon']").val(jArray[id]['telp_pegawai']);
        $("[name='email']").val(jArray[id]['email_pegawai']);
        if (jArray[id]['role_pegawai'] == 1)
        {
            $("[name='role']").val("Super Admin");
        }
        else if (jArray[id]['role_pegawai'] == 2)
        {
            $("[name='role']").val("Accounting");
        }
        else if (jArray[id]['role_pegawai'] == 3)
        {
            $("[name='role']").val("Supervisor");
        }
        else if (jArray[id]['role_pegawai'] == 4)
        {
            $("[name='role']").val("Pegawai");
        }
        else
        {
            $("[name='role']").val("Kurir");
        }
    }

    function onlyNumberKey(evt) {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
