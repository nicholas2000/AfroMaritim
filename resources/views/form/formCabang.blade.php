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
                                        <form action="" method="post">
                                            @csrf
                                            <button name=""type="submit" class="btn btn"><i class="fa fa-pencil-alt"></i></button>
                                        </form>
                                        <form action="" method="post">
                                            @csrf
                                            <button style="margin-left: 2%" type="submit" name="" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </center>
                                </th>
                            </tr>
                            <?php $ctr++; ?>
                        @endforeach
                    </table>
                </div>

            </div>
    </section>

</body>

</html>
