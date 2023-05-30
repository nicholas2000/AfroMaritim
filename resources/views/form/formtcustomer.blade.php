<style>
    .wrapper {
        width: 200px;
        padding: 20px;
        height: 50px;
    }
</style>

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

            <form class="form-horizontal" action="{{ url('/doAddcustomer') }}" method="post" id="contact_form">
                @csrf
                <!--input code-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Kode</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span
                                style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                class="input-group-addon"><i style="color: white" class="fa fa-code"></i></span>
                            <input name="kode" class="form-control" type="text" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-1 control-label">Cabang*</label>
                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                            <span
                                style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                class="input-group-addon"><i style="color: white" class="fa fa-map-marker"></i></span>
                            <select name="cabang" style="height:35px" class="form-control selectpicker">
                                <option value="">Pilih Cabang*</option>
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
                            <span
                                style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                class="input-group-addon"><i style="color: white" class="fa fa-user"></i></span>
                            <input name="nama" placeholder="Masukkan Nama" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- input npwp-->

                <div class="form-group">
                    <label class="col-md-1 control-label">NPWP</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span
                                style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                class="input-group-addon"><i style="color: white" class="fa fa-id-card"></i></span>
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
                            <span
                                style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                class="input-group-addon"><i style="color: white" class="fa fa-road"></i></span>
                            <input name="jalan" placeholder="Masukkan Alamat" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- input province-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Provinsi</label>
                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                            <span
                                style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                class="input-group-addon"><i style="color: white" class="fa fa-map-marker"></i></span>
                            <select name="provinsi" style="height:35px;" class="form-control selectpicker">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($arrProvinsi as $prm)
                                    <option value="{{ $prm->id }}">{{ $prm->prov_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!--input zipcode-->
                <div class="form-group">
                    <label class="col-md-2 control-label">Kode Pos</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span
                                style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                class="input-group-addon"><i style="color: white" class="fa fa-envelope"></i></span>
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
                            <span
                                style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                class="input-group-addon"><i style="font-size: 100%;color: white"
                                    class="fa fa-phone"></i></span>
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
                            <span
                                style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                class="input-group-addon"><i style="color: white" class="fa fa-envelope"></i></span>
                            <input name="email" placeholder="Masukkan E-Mail" class="form-control" type="email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label">Pajak*</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group" style="margin-top: 10px;">
                            <input type="radio" name="pajak" value="pph23" />
                            Kena Pajak
                            <div style="margin-left: 2%;"></div>
                            <input type="radio" name="pajak" value="pajak1,1" />
                            Tidak Kena Pajak
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Status Hutang*</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group" style="margin-top: 12px;">
                            <input type="radio" name="status" value="On" onclick="show1();" />
                            Aktif
                            <div style="margin-left: 2%;"></div>
                            <input type="radio" name="status" value="Off" onclick="show2();" />
                            Tidak
                        </div>
                    </div>
                </div>
                <div id="div1">
                    <!--input total hutang-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" style="margin-top: -10px;">Total Hutang</label>
                        <div class="col-md-10 inputGroupContainer">
                            <div class="input-group">
                                <span
                                    style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                    class="input-group-addon"><i style="color: white" class="fa fa-usd"></i></span>
                                <input name="batasanHutang" placeholder="Masukkan Total Hutang" class="form-control"
                                    type="text">
                            </div>
                        </div>
                    </div>

                    <!--input batas waktu pembayaran-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" style="margin-top: -10px;">Batas Pembayaran</label>
                        <div class="col-md-10 inputGroupContainer">
                            <div class="input-group">
                                <span
                                    style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                    class="input-group-addon"><i style="color: white"
                                        class="fa fa-calendar"></i></span>
                                <input name="batasPembayaran" onfocus="(this.type='date')"
                                    placeholder="Masukkan Batas Waktu Pembayaran" class="form-control"
                                    type="text">
                            </div>
                        </div>
                    </div>

                    <!--input no rekening-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" style="margin-top: -10px;">No Rekening</label>
                        <div class="col-md-10 inputGroupContainer">
                            <div class="input-group">
                                <span
                                    style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                    class="input-group-addon"><i style="color: white"
                                        class="fa fa-credit-card"></i></span>
                                <input onkeypress="return onlyNumberKey(event)" name="noRekening"
                                    placeholder="Masukkan No Rekening" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- input metode-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" style="margin-top: -10px;">Metode Pembayaran</label>
                        <div class="col-md-10 selectContainer">
                            <div class="input-group">
                                <span
                                    style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;"
                                    class="input-group-addon"><i style="color: white"
                                        class="fa fa-university"></i></span>
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
                    <div class="col-md-10" style="text-align: center"><br>
                        <button type="submit" class="btn btn-primary">Tambah</button>
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
