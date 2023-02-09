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
        @media screen and (max-width: 600px) {
            .p {
                margin-left: 10%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        @if ($errors->any())
        @foreach ($errors->all() as $err)
            <div class="alert alert-danger">{{ $err }}</div>
        @endforeach
    @endif
        <fieldset>

            <!-- Form Add Customer -->
            <legend>
                <h2><b>Tambah Customer</b></h2>
            </legend><br>

            <form class="form-horizontal" action="{{url('/doAddcustomer')}}" method="post" id="contact_form">
                @csrf
                <!--input code-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Kode</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="fa fa-code"></i></span>
                            <input name="kode" class="form-control" type="text" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-1 control-label">Cabang</label>
                      <div class="col-md-10 selectContainer">
                          <div class="input-group">
                              <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"  class="glyphicon glyphicon-map-marker"></i></span>
                              <select name="cabang" style="height:35px" class="form-control selectpicker">
                                  <option value="">Pilih Cabang</option>
                                  @foreach ($cabang as $prm)
                                        <option value="{{$prm->id_cabang}}">{{$prm->nama_cabang}}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                  </div>

                <!-- input name-->

                <div class="form-group ">
                    <label class="col-md-1 control-label">Nama</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="glyphicon glyphicon-user"></i></span>
                            <input name="nama" placeholder="Masukkan Nama" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- input npwp-->

                <div class="form-group">
                    <label class="col-md-1 control-label">NPWP</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="fa fa-id-card"></i></span>
                            <input onkeypress="return onlyNumberKey(event)" name="npwp" placeholder="Masukkan NPWP"
                                class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- input street-->

                <div class="form-group">
                    <label class="col-md-1 control-label">Alamat</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="glyphicon glyphicon-road"></i></span>
                            <input name="jalan" placeholder="Masukkan Alamat" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- input province-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Provinsi</label>
                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="glyphicon glyphicon-map-marker"></i></span>
                            <select name="provinsi" style="height:35px" class="form-control selectpicker">
                                <option value="">Pilih Provinsi</option>
                                <option>Jawa Timur</option>
                                <option>Jawa Barat</option>
                                <option>Jawa Tengah</option>
                                <option>Jakarta Pusat</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- input city-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Kota</label>
                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="fa fa-building"></i></span>
                            <select name="kota" style="height:35px" class="form-control selectpicker">
                                <option value="">Pilih Kota</option>
                                <option>Surabaya</option>
                                <option>Bandung</option>
                                <option>Solo</option>
                                <option>Batu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- input district-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Kecamatan</label>
                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="glyphicon glyphicon-home"></i></span>
                            <select name="kecamatan" style="height:35px" class="form-control selectpicker">
                                <option value="">Pilih Kecamatan</option>
                                <option>Sidoarjo</option>
                                <option>Malang</option>
                                <option>Batu</option>
                                <option>Gresik</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- input village-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Kelurahan</label>
                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="glyphicon glyphicon-home"></i></span>
                            <select name="kelurahan" style="height:35px" class="form-control selectpicker">
                                <option value="">Pilih Kelurahan</option>
                                <option>Kediri</option>
                                <option>Blitar</option>
                                <option>Batu</option>
                                <option>Gresik</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!--input zipcode-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Kode Pos</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="glyphicon glyphicon-envelope"></i></span>
                            <input onkeypress="return onlyNumberKey(event)" name="kodepos"
                                placeholder="Masukkan Kode Pos" class="form-control" type="telp">
                        </div>
                    </div>
                </div>

                <!--input fax-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Telpon</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="glyphicon glyphicon-earphone"></i></span>
                            <input onkeypress="return onlyNumberKey(event)" name="telpon"
                                placeholder="Masukkan Nomer Telpon" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!--input email-->
                <div class="form-group">
                    <label class="col-md-1 control-label">E-Mail</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="Masukkan E-Mail" class="form-control" type="email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label">Pajak</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div  class="input-group" style="margin-top: 10px;" >
                            <input type="radio" name="pajak" value="pph23"/>
                            Kena Pajak
                            <input type="radio" name="pajak" value = "pajak1,1"/>
                            Tidak Kena Pajak
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label">Status Hutang</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group" style="margin-top: 12px;" >
                            <input type="radio" name="status" value="On" onclick="show1();"/>
                            Aktif
                            <input type="radio" name="status" value = "Off"onclick="show2();" />
                            Tidak
                        </div>
                    </div>
                </div>
                <div id="div1">
                    <!--input total hutang-->
                    <div class="form-group">
                        <label class="col-md-1 control-label" style="margin-top: -10px;">Total Hutang</label>
                        <div class="col-md-10 inputGroupContainer">
                            <div class="input-group">
                                <span style="background-color: #023e94" class="input-group-addon"><i
                                        style="color: white" class="glyphicon glyphicon-usd"></i></span>
                                <input name="batasanHutang" placeholder="Masukkan Total Hutang" class="form-control"
                                    type="text">
                            </div>
                        </div>
                    </div>

                    <!--input batas waktu pembayaran-->
                    <div class="form-group">
                        <label class="col-md-1 control-label" style="margin-top: -10px;">Batas Pembayaran</label>
                        <div class="col-md-10 inputGroupContainer">
                            <div class="input-group">
                                <span style="background-color: #023e94" class="input-group-addon"><i
                                        style="color: white" class="fa fa-calendar"></i></span>
                                <input name="batasPembayaran" onfocus="(this.type='date')" placeholder="Masukkan Batas Waktu Pembayaran"
                                    class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!--input no rekening-->
                    <div class="form-group">
                        <label class="col-md-1 control-label" style="margin-top: -10px;">No Rekening</label>
                        <div class="col-md-10 inputGroupContainer">
                            <div class="input-group">
                                <span style="background-color: #023e94" class="input-group-addon"><i
                                        style="color: white" class="fa fa-credit-card"></i></span>
                                <input onkeypress="return onlyNumberKey(event)" name="noRekening"
                                    placeholder="Masukkan No Rekening" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- input metode-->
                    <div class="form-group">
                        <label class="col-md-1 control-label" style="margin-top: -10px;">Metode Pembayaran</label>
                        <div class="col-md-10 selectContainer">
                            <div class="input-group">
                                <span style="background-color: #023e94" class="input-group-addon"><i
                                        style="color: white" class="fa fa-university"></i></span>
                                <select name="metodePembayaran" style="height:35px"
                                    class="form-control selectpicker">
                                    <option value="">Pilih Metode Pembayaran</option>
                                    <option>Transfer</option>
                                    <option>Tunai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                      <center><button type="submit" class="btn btn-primary">Tambah</button></center>
                    </div>
                </div>
            </form>

            </fieldset>
    </div>
    </div><!-- /.container -->
</body>
<script>
    function onlyNumberKey(evt) {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }

    function show1() {
        document.getElementById('div1').style.display = 'block';
    }

    function show2() {
        document.getElementById('div1').style.display = 'none';
    }
</script>

</html>
