<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<section class="order-form m-4">
    <div class="container pt-4">
        <div class="container">
            <div class="form-group">
                <div class="col-md-3 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                        <input name="" placeholder="Cari Halaman" class="form-control"  type="text" >
                    </div>
                </div>
            </div>
            <br>
            <div class="col-12 ">
                <h2> Penjualan</h2>
                <br>
            </div>
            <br>

                {{-- ----- --}}

            </div>

            <div class="col-12">
                <table class="table table-bordered">

                    <tr style="background-color:  #ec1d24;color: white;">

                        <th scope="col"> <center>Customer</center></th>

                    </tr>

                    <tr>


                        <td><div class="col-sm-4">Kode Transaksi</div>
                        <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
                    </td>
                    <td><div class="col-sm-4">Tanggal</div>
                        <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
                    </tr>

                    <tr>


                        <td><div class="col-sm-4">Admin</div>
                            <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
                            <td><div class="col-sm-4">Waktu</div>
                                <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
                    </tr>

                    <tr>


                        <td><div class="col-sm-4">Subtotal</div>
                            <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
                        <td>Rp.</td>

                    </tr>

                    <tr>


                        <td><div class="col-sm-4">Diskon</div>
                            <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
                        <td>Rp.</td>

                    </tr>

                </table>
            </div>
            <button type="button" style="float: right;" name="" class="btn btn-outline-danger">ADD</button>

            <div class="col-12">
                <table class="table table-bordered">

                    <tr style="background-color:  #ec1d24;color: white;">

                        <th scope="col"> <center>Keranjang</center></th>

                    </tr>

                    <tr>


                        <td><div class="col-sm-4">Ukuran</div>
                        <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
                    </td>
                        <td><div class="col-sm-4">Volume</div>
                        <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
                    </td>
                    <td><div class="col-sm-4">Berat</div>
                        <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
                    </td>
                    </tr>
                </table>
            </div>

            <div class="col-12">
                <table class="table table-bordered">

                    <tr style="background-color:  #ec1d24;color: white;">

                        <th scope="col"> <center>Transaksi</center></th>

                    </tr>

                    <tr style="background-color:  white;color: #ec1d24;">

                        <th scope="col"> <center>Nama Customer</center></th>
                        <th scope="col"> <center>Rute</center></th>
                        <th scope="col"> <center>Harga</center></th>
                        <th scope="col"> <center>Jenis Harga</center></th>
                        <th scope="col"> <center>Tonase</center></th>
                        <th scope="col"> <center>Harga Tambahan</center></th>
                        <th scope="col"> <center>Discount</center></th>
                        <th scope="col"> <center>Total</center></th>


                    </tr>

                    <tr>


                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    </tr>
                </table>
            </div>
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

