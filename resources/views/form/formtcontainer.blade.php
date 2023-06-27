
<section class="order-form m-4">
    <div class="container">
        <form class="form-horizontal" action=" {{url('/doaddcontainer')}}" method="post" id="contact_form">
            @csrf
            <fieldset>

                <!-- Form Add Box Model -->
                <legend>
                    <h2><b>Tambah Container </b></h2>
                </legend><br>

                <!-- input nama team-->
                <div class="form-group">
                    <label class="col-md-2 control-label">No Container</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                    class="fa fa-archive"></i></span>
                            <input name="nomor_container"
                                placeholder="Masukkan No Container" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!--input no container-->
                <div class="form-group">
                    <label class="col-md-2 control-label">Nama Container</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                    class="fa fa-cog"></i></span>
                            <select name="namacon" style="height:35px" class="form-control selectpicker">
                                <option value="">Pilih Container</option>
                                <option>Tb</option>
                                <option>Dms</option>

                            </select>
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
