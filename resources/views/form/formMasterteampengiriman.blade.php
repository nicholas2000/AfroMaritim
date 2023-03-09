{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

<section class="order-form m-4">
    <div class="container">
        <form class="form-horizontal" action=" " method="post" id="contact_form">
            <fieldset>

                <!-- Form Add Box Model -->
                <legend>
                    <h2><b>Tambah Team Pengiriman </b></h2>
                </legend><br>

                <!-- input wilayah-->
                <div class="form-group">
                    <label class="col-md-2 control-label">Wilayah</label>
                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                            <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                    class="fa fa-map-marker"></i></span>
                            <select name="wilayah" style="height:35px" class="form-control selectpicker">
                                <option value="">Pilih Wilayah</option>
                                <option>Jawa Timur</option>
                                <option>Jawa Barat</option>
                                <option>Jawa Tengah</option>
                                <option>Jakarta Pusat</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- input nama team-->
                <div class="form-group">
                    <label class="col-md-2 control-label"style="margin-top: -10px;">Nama Team</label>
                    <div class="col-md-10 selectContainer">
                        <div class="input-group">
                            <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                    class="fa fa-users"></i></span>
                            <select name="kota" style="height:35px" class="form-control selectpicker">
                                <option value="">Pilih Nama Team</option>
                                <option>Surabaya</option>
                                <option>Bandung</option>
                                <option>Solo</option>
                                <option>Batu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!--input no container-->
                <div class="form-group">
                    <label class="col-md-2 control-label" style="margin-top: -10px;">No Container</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white"
                                    class="fa fa-archive"></i></span>
                            <input name="nocontainer"
                                placeholder="Masukkan No Container" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!--input no paket-->
                <div class="form-group">
                    <label class="col-md-2 control-label">No Paket</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white" class="fa fa-archive"></i></span>
                            <input name="nocontainer"
                                placeholder="Masukkan No Paket" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!--input link Drive-->
                <div class="form-group">
                    <label class="col-md-2 control-label">Link Drive</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="border-radius: 10%;text-align: center;background-color: #023e94;width: 5%;padding-top: 1%;" class="input-group-addon"><i style="color: white" class="fa fa-archive"></i></span>
                            <input name="nocontainer"
                                placeholder="Masukkan Link" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-10"><br>
                       <a href="{{ url('/dashboard') }}"><center><button type="button" class="btn btn-primary">Tambah</button></center></a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</section>
