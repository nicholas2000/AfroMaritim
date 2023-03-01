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
                        </tr>
                        <?php $ctr = 1; ?>
                        @foreach ($arrCon as $prm)
                            <tr>
                                <td>{{ $ctr }}</td>
                                <td>{{ $prm->no_container }}</td>
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
                            </tr>
                            <?php $ctr++; ?>
                        @endforeach

                    </table>
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
