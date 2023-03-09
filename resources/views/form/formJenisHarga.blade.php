
<section class="order-form m-4">
    <div class="container">
        <form class="form-horizontal" action=" {{url('/domasterJenisharga')}}" method="post" id="contact_form">
            @csrf
            <fieldset>

                <!-- Form Add Box Model -->
                <legend>
                    <h2><b>Tambah Jenis Harga </b></h2>
                </legend><br>

                <!-- input wilayah-->
                <div class="form-group">
                    <label class="col-md-1 control-label" style="margin-top: -10px;">Jenis Harga</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                    class="fa fa-tags"></i></span>
                            <select name="jenisharga" id="jenisharga" class="form-control" style="height:35px;">
                                <option value="Berat">Berat</option>
                                <option value="Volume">Volume</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- input nama team-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Type</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                    class="fa fa-archive"></i></span>
                            <input name="tipe"
                                placeholder="Masukkan Type" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!--input no container-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Nominal</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                    class="fa fa-money"></i></span>
                            <input onkeypress="" name="nominal"
                                placeholder="Masukkan Nominal" class="form-control" type="text">
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
            </fieldset>
        </form>
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
