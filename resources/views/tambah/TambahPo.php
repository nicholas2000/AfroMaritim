<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<form action="/masterPo"  >

    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="container">
                <div class="col-12 ">
                    <h1> Tambah Purchase Order</h1>
                    <hr class="mt" />
                </div>
                <br>


                <div class="col-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                NO
                            </div>
                            <div class="col"  >
                                <input type="number" class="form-control" name="ttambnopenerimaanbarang" id="ttambnopenerimaanbarang" placeholder="Nomor">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                Jenis Barang
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="ttambahpojnsbrg" id="ttambahpojnsbrg" placeholder="Jenis Barang">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                Harga
                            </div>
                            <div class="col">
                                <input onkeypress="return onlyNumberKey(event)" type="text" class="form-control" name="ttambahhargapo" id="ttambahhargapo" placeholder="Harga">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                Quantity
                            </div>
                            <div class="col">
                                <input onkeypress="return onlyNumberKey(event)" type="text" class="form-control" name="ttambahqty" id="ttambahqty" placeholder="Qty">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                Diskon
                            </div>
                            <div class="col"  >
                                <input type="number" class="form-control" name="ttambahdis" id="ttambahdis" placeholder="Diskon">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                Harga
                            </div>
                            <div class="col">
                                <input onkeypress="return onlyNumberKey(event)" type="text" class="form-control" name="ttambahharga" id="ttambahharga" placeholder="Harga">
                            </div>
                        </div>
                    </div>



                    <!-- {{-- ---button--- --}} -->
                    <br>

                    </div>

                <!-- {{-- ----- --}} -->
                <br>
                
                <center>
                    <input class="btn btn-primary" type="submit" name="btnsubmittambah"  value="Tambah">
                </center>
                <br>

                <div class="col-12">
                    <table class="table table-bordered">
                    <tr style="background-color:  #ec1d24;color: white;">
                            <th scope="col">No</th>
                            <th scope="col"> <center>Nama Barang</center> </th>
                            <th scope="col"> <center>Harga Pokok</center> </th>
                            <th scope="col"> <center>Jumlah</center> </th>
                            <th scope="col"> <center>Diskon</center> </th>
                            <th scope="col"> <center>Harga Total</center> </th>

                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td><center>K1</center> </td>
                            <td><center>9000</center></td>
                            <td><center>10</center></td>
                            <td><center>10%</center></td>
                            <td><center>9000</center></td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td><center>K2</center> </td>
                            <td><center>13500000</center></td>
                            <td><center>10</center></td>
                            <td><center>11%</center></td>
                            <td><center>100</center></td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td><center>K3</center> </td>
                            <td><center>17400000</center></td>
                            <td><center>10</center></td>
                            <td><center>13%</center></td>
                            <td><center>1740000</center></td>
                        </tr>

                    </table>
                </div>
                
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
</form>

<!-- @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errors )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
