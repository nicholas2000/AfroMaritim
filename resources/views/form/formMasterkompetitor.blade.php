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
</head>
<body>
    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="container">
                <div class="col-12 ">
                    <h1> Form Master Kompetitor</h1>
                    <hr class="mt" />
                </div>
                <br>

                <div class="col-12">
                 <a href="{{ url('/tkompetitor') }}">  <button style="float: right;" type="button" class="btn btn-primary">Tambah</button></a>
                </div>
                <br><br>
                <div class="col-12">
                    <table class="table table-bordered">
                        <tr style="background-color:  #023e94;color: white;">
                                <th scope="col">No</th>
                                <th scope="col"> <center>ID Kompetitor</center> </th>
                                <th scope="col"> <center>Nama Kompetitor</center> </th>
                                <th scope="col"> <center>Alamat Kompetitor</center> </th>
                            </tr>
                            <?php $ctr = 1;?>
                            @foreach ($arrKompetitor as $prm)

                            <tr>
                                <th scope="row">{{$ctr}}</th>
                                <th scope="col"> <center>{{$prm->id_kompetitor}}</center> </th>
                                <th scope="col"> <center>{{$prm->nama_kompetitor}}</center> </th>
                                <th scope="col"> <center>{{$prm->alamat_kompetitor}}</center> </th>
                            </tr>
                            <?php $ctr++; ?>
                            @endforeach

                        </table>
                </div>

            </div>
    </section>




</body>

</html>
