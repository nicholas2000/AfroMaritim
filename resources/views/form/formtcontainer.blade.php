<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                    <label class="col-md-1 control-label">No Container</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="fa fa-archive"></i></span>
                            <input name="nocon"
                                placeholder="Masukkan No Container" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!--input no container-->
                <div class="form-group">
                    <label class="col-md-1 control-label">Nama Container</label>
                    <div class="col-md-10 inputGroupContainer">
                        <div class="input-group">
                            <span style="background-color: #023e94" class="input-group-addon"><i style="color: white"
                                    class="fa fa-money"></i></span>
                            <input name="namacon"
                                placeholder="Masukkan Nama Container" class="form-control" type="text">
                        </div>
                    </div>
                </div>



                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
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
