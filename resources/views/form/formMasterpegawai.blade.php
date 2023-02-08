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
                        <h1> Form Master Pegawai</h1>
                        <hr class="mt" />
                    </div>
                    <br>


                    <div class="col-12">
                        <a href="{{ url('/tpegawai') }}"><button style="float: right;" type="button"
                            class="btn btn-primary">Tambah</button></a>
                    </div>
                    <br><br>
                    <div class="col-12">
                        <table class="table table-bordered">
                            <tr style="background-color:  #023e94;color: white;">
                                <th scope="col">No</th>
                                <th scope="col">
                                    <center>ID Pegawai</center>
                                </th>
                                <th scope="col">
                                    <center>Nama Pegawai</center>
                                </th>
                                <th scope="col">
                                    <center>Alamat Pegawai</center>
                                </th>
                                <th scope="col">
                                    <center>Role Pegawai</center>
                                </th>
                                <th scope="col">
                                    <center>Action</center>
                                </th>
                            </tr>
                            <?php $ctr = 1; ?>

                            @foreach ($arrPegawai as $prm)
                                <tr>

                                    <th scope="row">{{ $ctr }}</th>
                                    <th scope="col">
                                        <center>{{ $prm->id_pegawai }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->nama_pegawai }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->alamat_pegawai }}</center>
                                    </th>
                                    <th scope="col">
                                        <center>{{ $prm->role_pegawai }}</center>
                                    </th>
                                    <th scope="col">
                                        <center style="display: flex;">
                                            <form action="{{ url('/masterCustomer') }}" method="">
                                                @csrf
                                                <center><button style="margin-left: 40%;" name=""type="submit" class="btn btn"><i class="fa fa-pencil-alt"></i></button></center>
                                            </form>
                                            <form method="post"
                                        action="{{ url('masterPegawai/delete/' . $prm->id_pegawai) }}">
                                        @csrf
                                        <button style="margin-left: 80%;" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
