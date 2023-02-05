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
                        <h1> Form Master Customer</h1>
                        <hr class="mt" />
                    </div>
                    <br>


                    <div class="col-12">
                        <a href="{{ url('/tcustomer') }}"><button style="float: right;" type="button"
                            class="btn btn-primary">Tambah</button></a>
                    </div>
                    <br><br>
                    <div class="col-12">
                        <table class="table table-bordered">
                            <tr style="background-color:  #023e94;color: white;">
                                <th scope="col">No</th>
                                <th scope="col">
                                    <center>ID Customer</center>
                                </th>
                                <th scope="col">
                                    <center>ID Cabang</center>
                                </th>
                                <th scope="col">
                                    <center>Nama Customer</center>
                                </th>
                                <th scope="col">
                                    <center>Provinsi</center>
                                </th>
                                <th scope="col">
                                    <center>Kota</center>
                                </th>
                                <th scope="col">
                                    <center>Telpon</center>
                                </th>
                                <th scope="col">
                                    <center>Email</center>
                                </th>
                                <th scope="col">
                                    <center>Action</center>
                                </th>
                            </tr>
                            <?php $ctr = 1; ?>

                            @foreach ($arrCustomer as $prm)
                                <tr>

                                    <th scope="row">{{ $ctr }}</th>
                                    <th scope="col">
                                        <center>{{ $prm->id_customer }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->id_cabang }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->nama_customer }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->provinsi }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->kota }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->telpon }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->email }}</center>
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
