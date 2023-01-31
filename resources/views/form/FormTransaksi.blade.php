<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<section class="order-form m-4">
    <div class="container pt-4">
        <div class="container">
            <div class="form-group">
                <div class="container">
                    <div class="row">
                      <div class="col-sm>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                        <input name="" placeholder="Cari Halaman" class="form-control"  type="text" >
                      </div>
                      <div class="col-5"></div>
                      <div class="" style="">
                        Nama Admin :
                      </div>
                    </div>
                  </div>
            </div>
            <br>
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h3>Transaksi</h3>
                </div>
              </div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                  <div class="col-12">
                    <h3> Customer</h3>
                  </div>
                </div>
              </div>

              <div class="container">
                <div class="row">
                    <div class="col-sm-1">

                    </div>
                  <div class="col-sm-3">
                     Kode Transaksi :
                  </div>
                  <div class="col-sm-3">
                    <input  name="kode" class="form-control" type="text" disabled>
                  </div>
                  <div class="col-sm">
                    Tanggal :
                  </div>
                  <div class="col-sm-3">

                  </div>
                </div>
              </div>
              <br>
              <div class="container">
                <div class="row">
                    <div class="col-sm-1">

                    </div>
                  <div class="col-sm-3">
                     Admin :
                  </div>
                  <div class="col-sm-3">
                    <input  name="kode" class="form-control" type="text" enabled>
                  </div>
                  <div class="col-sm">
                    Waktu :
                  </div>
                  <div class="col-sm-3">

                  </div>
                </div>
              </div>
              <br>
              <div class="container">
                <div class="row">
                    <div class="col-sm-1">

                    </div>
                    <div class="col-sm-3">
                      Subtotal :
                   </div>
                   <div class="col-sm-3">
                     <input  name="kode" class="form-control" type="text" enabled>
                   </div>
                   <div class="col-sm-3" style="background-color: greenyellow">
                    <h2>Rp.</h2>
                 </div>
                </div>
              </div>
              </div>
              <br>

              <br>
              <div class="container">
                <div class="row">
                    <div class="col-sm-1">

                    </div>
                  <div class="col-sm-3">
                     Pilih Diskon :
                  </div>
                  <div class="col-sm-3">
                    <input  name="kode" class="form-control" type="text" enabled>
                  </div>
                  <div class="col-sm-3">
                    <button type="button" style="float: right; background-color:aqua" name="" class="btn btn-outline-danger">Bayar</button>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <br>

              <div class="container">
                <div class="row">
                  <div class="col-sm">
                     Daftar Pesanan :
                  </div>
                  <div class="col-sm">
                    <input  name="kode" class="form-control" type="text" enabled>
                  </div>
                  <div class="col-sm">
                    Ukuran :
                  </div>
                  <div class="col-sm">
                    <input  name="kode" class="form-control" type="text" enabled>
                  </div>
                  <div class="col-sm">
                    Volume :
                  </div>
                  <div class="col-sm">
                    <input  name="kode" class="form-control" type="text" enabled>
                  </div>
                  <div class="col-sm">
                    Berat :
                  </div>
                  <div class="col-sm">
                    <input  name="kode" class="form-control" type="text" enabled>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <br>
              <div class="container">
                <div class="row">
                  <div class="col-sm-4">
                     <h3>Transaksi</h3>
                  </div>
                </div>
              </div>
              <br>
              <div class="col-12">
                <table id="datatables" class="table table-bordered">

                    <tr style="background-color:  #ec1d24;color: white;">
                        <th scope="col">No.</th>
                        <th scope="col">
                            <center>Nama Customer</center>
                        </th>
                        <th scope="col">
                            <center>Rute</center>
                        </th>
                        <th scope="col">
                            <center>Harga</center>
                        </th>
                        <th scope="col">
                            <center>Jenis Harga</center>
                        </th>
                        <th scope="col">
                            <center>Tonase</center>
                        </th>
                        <th scope="col">
                            <center>Harga Tambahan</center>
                        </th>
                        <th scope="col">
                            <center>Discount</center>
                        </th>
                        <th scope="col">
                            <center>Total</center>
                        </th>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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

