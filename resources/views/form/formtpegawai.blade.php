@if ($errors->any())
        @foreach ($errors->all() as $err)
            <div class="alert alert-danger">{{ $err }}</div>
        @endforeach
    @endif
<div class="container">
    <form class="form-horizontal" action="{{ url('/dotmpegawai') }} " method="post" id="contact_form">
        @csrf
        <fieldset>
            <!-- Form Add Pegawai -->
            <legend>
                <h2><b>Tambah Pegawai</b></h2>
            </legend><br>

            <!--input code-->
            <div class="form-group">
                <label class="col-md-1 control-label">Kode</label>
                <div class="col-md-10 inputGroupContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-code"></i></span>
                        <input name="kode" class="form-control" type="text" disabled>
                    </div>
                </div>
            </div>

            <!-- input cabang-->
            <div class="form-group">
                <label class="col-md-1 control-label">Cabang*</label>
                <div class="col-md-10 selectContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-map-marker"></i></span>
                        <select name="cabang" style="height:35px" class="form-control selectpicker">
                            <option value="">Pilih Cabang</option>
                            @foreach ($arrCabang as $prm)
                                <option value="{{ $prm->id_cabang }}">{{ $prm->nama_cabang }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- input name-->

            <div class="form-group ">
                <label class="col-md-1 control-label">Nama*</label>
                <div class="col-md-10 inputGroupContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-user"></i></span>
                        <input name="nama" placeholder="Masukkan Nama" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- input npwp-->

            <div class="form-group">
                <label class="col-md-1 control-label">NPWP</label>
                <div class="col-md-10 inputGroupContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-id-card"></i></span>
                        <input onkeypress="return onlyNumberKey(event)" name="npwp" placeholder="Masukkan NPWP"
                            class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- input street-->

            <div class="form-group">
                <label class="col-md-1 control-label">Alamat*</label>
                <div class="col-md-10 inputGroupContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-road"></i></span>
                        <input name="jalan" placeholder="Masukkan Alamat" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- input province-->
            <div class="form-group">
                <label class="col-md-1 control-label">Provinsi</label>
                <div class="col-md-10 selectContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-map-marker"></i></span>
                        <select name="provinsi" style="height:35px" class="form-control selectpicker">
                            <option value="">Pilih Provinsi</option>
                            <option>Jawa Timur</option>
                            <option>Sulawesi Selatan</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- input city-->
            <div class="form-group">
                <label class="col-md-1 control-label">Kota</label>
                <div class="col-md-10 selectContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-building"></i></span>
                        <select name="kota" style="height:35px" class="form-control selectpicker">
                            <option value="">Pilih Kota</option>
                            <option>Surabaya</option>
                            <option>Makassar</option>
                        </select>
                    </div>
                </div>
            </div>

            <!--input zipcode-->
            <div class="form-group">
                <label class="col-md-2 control-label">Kode Pos</label>
                <div class="col-md-10 inputGroupContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-envelope"></i></span>
                        <input onkeypress="return onlyNumberKey(event)" name="kodepos"
                            placeholder="Masukkan Kode Pos" class="form-control" type="telp">
                    </div>
                </div>
            </div>


            <!--input fax-->
            <div class="form-group">
                <label class="col-md-1 control-label">Telpon*</label>
                <div class="col-md-10 inputGroupContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-phone"></i></span>
                        <input onkeypress="return onlyNumberKey(event)" name="telpon"
                            placeholder="Masukkan Nomer Telpon" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!--input email-->
            <div class="form-group">
                <label class="col-md-1 control-label">E-Mail*</label>
                <div class="col-md-10 inputGroupContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-envelope"></i></span>
                        <input name="email" placeholder="Masukkan E-Mail" class="form-control" type="email">
                    </div>
                </div>
            </div>
            <!--input password-->
            <div class="form-group">
                <label class="col-md-1 control-label">Password*</label>
                <div class="col-md-10 inputGroupContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-envelope"></i></span>
                        <input name="password" placeholder="Masukkan Password" class="form-control" type="password">
                    </div>
                </div>
            </div>
            <!--input confirm password-->
            <div class="form-group">
                <label class="col-md-2 control-label">Confirm Password*</label>
                <div class="col-md-10 inputGroupContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-envelope"></i></span>
                        <input name="con_password" placeholder="Masukkan Konfirmasi Password" class="form-control" type="password">
                    </div>
                </div>
            </div>

            <!-- input role-->
            <div class="form-group">
                <label class="col-md-1 control-label">Role*</label>
                <div class="col-md-10 selectContainer">
                    <div class="input-group">
                        <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                class="fa fa-cog"></i></span>
                        <select name="role" style="height:35px" class="form-control selectpicker">
                            <option value="">Pilih Role</option>
                            <option>Super Admin</option>
                            <option>Admin Surabaya</option>
                            <option>Admin Makassar</option>
                            <option>Accounting</option>
                            <option>Kurir</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-10" style="text-align: center"><br>
                    <button type="submit"  class="btn btn-primary">Tambah</button>
                </div>
                <script>
                    function onlyNumberKey(evt) {
                        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
                        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                            return false;
                        return true;
                    }
                </script>
            </div>
        </fieldset>
    </form>
</div>
