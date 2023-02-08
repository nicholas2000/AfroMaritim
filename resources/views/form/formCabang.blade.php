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
        .popup form select{
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
                    <h1> Form Master Cabang</h1>
                    <hr class="mt" />
                </div>
                <br>


                <div class="col-12">
                    <a href="{{ url('/tcabang') }}"><button style="float: right;" type="button"
                            class="btn btn-primary">Tambah</button></a>
                </div>
                <br><br>

                <div class="col-12">
                    <table class="table table-bordered">
                        <tr style="background-color:  #023e94;color: white;">
                            <th scope="col">No</th>
                            <th scope="col">
                                <center>ID Cabang</center>
                            </th>
                            <th scope="col">
                                <center>Nama Cabang</center>
                            </th>
                            <th scope="col">
                                <center>Alamat Cabang</center>
                            </th>
                            <th scope="col">
                                <center>Email</center>
                            </th>
                            <th scope="col">
                                <center>No Telpon</center>
                            </th>
                            <th scope="col">
                                <center>Action</center>
                            </th>
                        </tr>
                        <?php $ctr = 1; ?>

                        @foreach ($arrCabang as $prm)
                            <tr>

                                <th scope="row">{{ $ctr }}</th>
                                <th scope="col">
                                    <center>{{ $prm->id_cabang }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->nama_cabang }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->alamat_cabang }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->email_cabang }}</center>
                                </th>
                                <th scope="col">
                                    <center>{{ $prm->telpon_cabang }}</center>
                                </th>
                                <th scope="col">
                                    <center style="display: flex;">

                                        <button style="height: 29px;" class="btn" id="btnedit" data-toggle="modal"
                                            data-target="#myModal" onclick="btnedit({{$ctr-1}})"><i class="fa fa-pencil-alt"></i></button>

                                        <form method="post"
                                            action="{{ url('masterCabang/delete/' . $prm->id_cabang) }}">
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
            </div>
        </div>
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 >Edit Cabang</h4>
                        <button class="close" type="button" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="popup">
                            <form action="{{ url('masterCabang/edit/') }}" method="post">
                                @csrf
                                <label style="margin-left: 40px;" >Kode</label>
                                <input name="kode" class="form-control" type="text" readonly>

                                <label style="margin-left: 40px;">Nama</label>
                                <input name="nama" placeholder="Masukkan Nama" class="form-control" type="text">

                                <label style="margin-left: 40px;">Jumlah Pegawai</label>
                                <input onkeypress="return onlyNumberKey(event)" name="jum"
                                placeholder="Masukkan Jumlah Pegawai" class="form-control" type="text">

                                <label style="margin-left: 40px;">Alamat</label>
                                <input name="alamat" placeholder="Masukkan Alamat" class="form-control" type="text">

                                <label style="margin-left: 40px;" >Provinsi</label>
                                <select name="provinsi" style="height:35px" class="form-control selectpicker">
                                    <option value="">Pilih Provinsi</option>
                                    <option>Jawa Timur</option>
                                    <option>Jawa Barat</option>
                                    <option>Jawa Tengah</option>
                                    <option>Jakarta Pusat</option>
                                </select>

                                <label style="margin-left: 40px;" >Kota</label>
                                <select name="kota" style="height:35px" class="form-control selectpicker">
                                    <option value="">Pilih Kota</option>
                                    <option>Surabaya</option>
                                    <option>Bandung</option>
                                    <option>Solo</option>
                                    <option>Batu</option>
                                </select>

                                <label style="margin-left: 40px;" >Kode Pos</label>
                                <input onkeypress="return onlyNumberKey(event)" name="kodepos"
                                placeholder="Masukkan Kode Pos" class="form-control" type="text">

                                <label style="margin-left: 40px;" >Telpon</label>
                                <input onkeypress="return onlyNumberKey(event)" name="telpon"
                                placeholder="Masukkan Nomer Telpon" class="form-control" type="telp">

                                <label style="margin-left: 40px;" >Google Maps</label>
                                <input name="gmaps" placeholder="Masukkan Link" class="form-control" type="text">

                                <label style="margin-left: 40px;" >E-mail</label>
                                <input name="email" placeholder="Masukkan E-Mail" class="form-control" type="email">

                                <label style="margin-left: 40px;" >Status</label>
                                <select name="status" style="height:35px" class="form-control selectpicker">
                                    <option value="">Pilih Status</option>
                                    <option>Aktif</option>
                                    <option>Tidak</option>
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
    <script>

        function btnedit(id) {

            var jArray = <?php echo json_encode($arrCabang); ?>;
            $("[name='kode']").val(jArray[id]['id_cabang']);
            $("[name='nama']").val(jArray[id]['nama_cabang']);
        }
        </script>
</html>
