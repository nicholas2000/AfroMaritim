<body>
    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="container">
                <div class="col-12 ">
                    <h1> Rekap Kontainer</h1>
                    <hr class="mt" />
                </div>
                <br>
                <div class="col-12">
                    <a href="{{ url('/addContainer') }}"> <button style="float: right;" type="button"
                            class="btn btn-primary">Tambah</button></a>
                </div>
                <br><br>
                <div class="col-12">
                    <table class="table table-bordered" id="myTable">
                        <tr style="background-color:  #023e94;color: white;">
                            <th scope="col"class="col-1">No</th>
                            <th scope="col"class="col-2">
                                <center>No Container</center>
                            </th>
                            <th scope="col" class="col-2">
                                <center>Tgl Closing</center>
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
                                <td name="nomor_container">{{ $prm->nomor_container }}</td>
                                <td>{{ $prm->tanggal}}</td>
                                @if ($prm->status == '1')
                                    <td>Buka</td>
                                    <td style="text-align: center;">
                                        <form method="post"
                                            action="{{ url('masterContainer/lock/' . $prm->nomor_container) }}">
                                            @csrf
                                            <button style="height: 29px;background-color: green;color:white"
                                                class="btn" id="btnopen{{ $prm->nomor_container }}"
                                                onclick="clickClose('{{ $prm->nomor_container }}')"><i
                                                    class="fa fa-unlock"></i></button>
                                        </form>
                                    </td>
                                @else
                                    <td>Tutup</td>
                                    <td style="text-align: center;">
                                        <form method="post"
                                            action="{{ url('masterContainer/unlock/' . $prm->nomor_container) }}">
                                            @csrf
                                            <button style="height: 29px;background-color: red;color:white;"
                                                class="btn " id="btnclose{{ $prm->nomor_container }}"
                                                onclick="clickOpen('{{ $prm->nomor_container }}')">
                                                <i class="fa fa-lock"></i>
                                            </button>
                                        </form>
                                    </td>
                                @endif
                                <td>
                                    <center style="text-align:center">
                                        <button style="height: 29px;" class="btn" id="btnedit"
                                            data-toggle="modal"name="edit" data-target="#myModal"
                                            onclick="btnedit('{{ $prm->nomor_container }}')"><i class="fa fa-eye"></i></button>
                                    </center>
                                </td>
                            </tr>

                            <?php $ctr++; ?>
                        @endforeach

                    </table>

                </div>
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Isi Cabang</h4>
                                <button class="close" type="button" data-dismiss="modal">×</button>
                            </div>
                            <input type="hidden" id="data1" value="{{ $arrTransaksi }}">
                            <div class="modal-body">
                                <div class="popup table table-striped">
                                    <form action="{{ url('masterCustomer/edit/') }}" method="post">
                                        @csrf
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Container</th>
                                                    <th scope="col">No STT</th>
                                                    <th scope="col">Nama Barang</th>
                                                    <th scope="col">Tanggal Pengiriman</th>
                                                    <th scope="col">Colly</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list_container">

                                            </tbody>
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

        function btnedit($id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $id,
                    ctr: "LihatContainer"
                },
                success: function(data) {
                    $('#list_container').html("");
                    $('#list_container').append(data);
                }
            });
        }
    </script>




</body>

</html>
