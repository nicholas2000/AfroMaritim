<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<section class="order-form m-4">
    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <div class="alert alert-danger">{{ $err }}</div>
            @endforeach
        @endif
        <form class="form-horizontal" action="{{url('/doAdd')}}" method="post" id="contact_form">
            @csrf
            <fieldset>
                <!-- Form Add Box Model -->
                <legend>
                    <h2><b>Tambah Cabang</b></h2>
                </legend><br>

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

                <!-- input jumlah-->

                <div class="form-group">
                    <label class="col-md-1 control-label" style="margin-top: -10px">Jumlah Pegawai</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="fa fa-id-card"></i></span>
                            <input onkeypress="return onlyNumberKey(event)" name="jum"
                                placeholder="Masukkan Jumlah Pegawai" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- input alamat-->

                <div class="form-group">
                    <label class="col-md-1 control-label">Alamat</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="glyphicon glyphicon-road"></i></span>
                            <input name="alamat" placeholder="Masukkan Alamat" class="form-control" type="text">
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
                                placeholder="Masukkan Kode Pos" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!--input phone-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Telpon</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="glyphicon glyphicon-phone"></i></span>
                            <input onkeypress="return onlyNumberKey(event)" name="hp"
                                placeholder="Masukkan Nomer Telpon" class="form-control" type="telp">
                        </div>
                    </div>
                </div>

                <!--input google maps-->
                <div class="form-group">
                    <label class="col-md-1 control-label" style="margin-top: -10px">Google Maps</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="fa fa-map"></i></span>
                            <input name="gmaps" placeholder="Masukkan Link" class="form-control" type="text">
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

                <!-- input status-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Status</label>
                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="fa fa-cog"></i></span>
                            <select name="status" style="height:35px" class="form-control selectpicker">
                                <option value="">Pilih Status</option>
                                <option>Aktif</option>
                                <option>Tidak</option>
                            </select>
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
            </fieldset>
        </form>
    </div>
</section>
