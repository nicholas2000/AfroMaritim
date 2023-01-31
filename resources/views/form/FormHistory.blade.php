
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
    .p{
        display: flex;
        width: 100%
    }
    @media screen and (max-width: 600px) {
    .p {
        width: 60%;
    }
    .pk{
        width: 47%;
    }
}
</style>
<section class="order-form m-4">
    <div class="form-group">
        <div class="container">
            <div class="row">
              <div class="col-sm>
                <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                <input name="" placeholder="Transaksi" class="form-control"  type="text" >
              </div>
              <div class="col-5"></div>
              <div class="" style="">
                Nama Pegawai :
              </div>
            </div>
          </div>
    </div>

          <br>
          <div class="container">
            <div class="row">
              <div class="col">
                History Transaksi
              </div>

            </div>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-sm-1">
                No Transaksi
              </div>
              <div class="col-sm-5">

              </div>
              <div class="col-sm-1">
                No Kapal
              </div>
              <div class="col-sm-3">
                <input  name="kode" class="form-control" type="text" enabled>

              </div>
            </div>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                Nama Customer
              </div>
              <div class="col-sm-3">

              </div>
              <div class="col-sm-1">
                No Container
              </div>
              <div class="col-sm-3">
                <input  name="kode" class="form-control" type="text" enabled>

              </div>
            </div>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                Tanggal Pengiriman
              </div>
              <div class="col-sm-3">

              </div>
            </div>
          </div>


    <br>

    <button type="button" style="float: right;" name="" class="btn btn-outline-danger">Update</button>
</section>
<br>
<br>
<br>
<div class="container">
    <div class="row">
      <div class="col-sm">
         No Transaksi
      </div>
      <div class="col">
        Nama Customer
      </div>
      <div class="col">
        Harga
      </div>
      <div class="col">
        Tanggal Pengiriman
      </div>
      <div class="col">
        No Kapal
      </div>
      <div class="col">
        No Container
      </div>
    </div>
  </div>
