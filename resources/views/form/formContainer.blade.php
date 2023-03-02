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
                    <h1> Form Master Container</h1>
                    <hr class="mt" />
                </div>
                <br>

                <div class="col-12">
                    <a href="{{ url('/tcontainer') }}"> <button style="float: right;" type="button"
                            class="btn btn-primary">Tambah</button></a>
                </div>
                <br><br>
                <div class="col-12">
                    <table class="table table-bordered">
                        <tr style="background-color:  #023e94;color: white;">
                            <th scope="col"class="col-1">No</th>
                            <th scope="col"class="col-2">
                                <center>No Container</center>
                            </th>
                            <th scope="col" class="col-2">
                                <center>Nama Container</center>
                            </th>
                            <th scope="col"class="col-2">
                                <center>Status</center>
                            </th>
                            <th scope="col" class="col-1">
                                <center>Action</center>
                            </th>
                            <th scope="col" class="col-1">
                                <center>Lihat Isi</center>
                            </th>
                        </tr>
                        <?php $ctr = 1; ?>
                        @foreach ($arrCon as $prm)
                            <tr>
                                <td>{{ $ctr }}</td>
                                <td>{{ $prm->nomor_container }}</td>
                                <td>{{ $prm->nama_container }}</td>
                                @if ($prm->status == '1')
                                    <td>Buka</td>
                                    <td style="text-align: center;">
                                        <form method="post" action="{{ url('masterContainer/lock/' . $prm->id) }}">
                                            @csrf
                                            <button style="height: 29px;background-color: green;color:white"
                                                class="btn" id="btnopen{{ $prm->id }}"
                                                onclick="clickClose({{ $prm->id }})"><i
                                                    class="fa fa-unlock"></i></button>
                                        </form>
                                    </td>
                                @else
                                    <td>Tutup</td>
                                    <td style="text-align: center;">
                                        <form method="post" action="{{ url('masterContainer/unlock/' . $prm->id) }}">
                                            @csrf
                                            <button style="height: 29px;background-color: red;color:white;"
                                                class="btn " id="btnclose{{ $prm->id }}"
                                                onclick="clickOpen({{ $prm->id }})"><i
                                                    class="fa fa-lock"></i></button>
                                        </form>
                                    </td>
                                @endif
                                <td> <center style="text-align:center">
                                    <button style="height: 29px;" class="btn" id="btnedit" data-toggle="modal"
                                        data-target="#myModal" onclick="btnedit({{ $ctr - 1 }})"><i
                                            class="fa fa-eye"></i></button>
                                </center></td>
                            </tr>

                            <?php $ctr++; ?>
                        @endforeach

                    </table>

                </div>
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Edit Cabang</h4>
                                <button class="close" type="button" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="popup table table-striped">
                                    <form action="{{ url('masterCustomer/edit/') }}" method="post">
                                        @csrf
                                        <table class="table table-sm">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">No Resi</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Tanggel Pengiriman</th>
                                                <th scope="col">Colly</th>
                                              </tr>
                                            </thead>
                                            <?php $ctr = 1; ?>

                                            @foreach ($arrTransaksi as $prm)
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
                                                        <center>{{ $prm->telpon }}</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>{{ $prm->email }}</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center style="display: flex;">
                                                            <button style="height: 29px;" class="btn" id="btnedit" data-toggle="modal"
                                                                data-target="#myModal" onclick="btnedit({{ $ctr - 1 }})"><i
                                                                    class="fa fa-pencil-alt"></i></button>

                                                            <form method="post"
                                                                action="{{ url('masterCustomer/delete/' . $prm->id_customer) }}">
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger"><i
                                                                        class="fa fa-trash"></i></button>
                                                            </form>
                                                        </center>
                                                    </th>
                                                </tr>
                                                <?php $ctr++; ?>
                                            @endforeach
                                          </table>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <script>
        function clickOpen($id) {
            document.getElementById("btnopen" + $id).style.display = "block";
            document.getElementById("btnclose" + $id).style.display = "none";
        }

        function clickClose($id) {
            document.getElementById("btnclose" + $id).style.display = "block";
            document.getElementById("btnopen" + $id).style.display = "none";
        }

    </script>




</body>

</html>
