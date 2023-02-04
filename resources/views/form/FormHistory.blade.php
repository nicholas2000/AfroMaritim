
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
              <div class="col-sm">
                <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                <input name="" placeholder="Transaksi" class="form-control"  type="text" >
              </div>
              <div class="col-5"></div>
              <div class="" style="">
                Nama Pegawai :
              </div>
            </div>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-sm">
                History Transaksi
              </div>
              <div class="col-5"></div>
              <div class="" style="">
                <button type="button" style="" name="" class="btn btn-success">Import</button>
                <button type="button" style="" name="" class="btn btn-danger">Export</button>
              </div>

            </div>
          </div>
    </div>


          <br>
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                No Transaksi
              </div>
              <div class="col-sm">
                <div class="search-box">

                    <input  name="kode" autocomplete="off" class="form-control" type="text" enabled>
                    <div class="result"></div>
                </div>
              </div>

            </div>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                Nama Customer
              </div>
              <div class="col-sm">
                <input  name="kode" class="form-control" type="text" disabled>
              </div>

            </div>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                Tanggal Pengiriman
              </div>
              <div class="col-sm">
                <input  name="kode" class="form-control" type="text" disabled>
              </div>
            </div>
          </div>


    <br>

    <button style="float: right;" type="button" class="btn btn-primary">Tambah</button>
</section>
<br>
<br>
<br>

<div class="col-12">
    <table id="datatables" class="table table-bordered">

        <tr style="background-color:  #023e94;color: white;">
            <th scope="col">No.</th>
            <th scope="col">
                <center>No Transaksi</center>
            </th>
            <th scope="col">
                <center>Nama Customer</center>
            </th>
            <th scope="col">
                <center>Harga</center>
            </th>
            <th scope="col">
                <center>Tanggal Pengiriman</center>
            </th>
            <th scope="col">
                <center>Keterangan</center>
            </th>
        </tr>

        <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                    <button type="button" name=""  class="btn btn"><i class="fa fa-pencil-alt"></i></button>
                    <button style="margin-left: 2%" name="" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    <button style="margin-left: 2%" name="" type="button" class="btn btn-success"><i class="far fa-money-bill-alt"></i></button>
            </td>

        </tr>

        <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button type="button" name=""  class="btn btn"><i class="fa fa-pencil-alt"></i></button>
                <button style="margin-left: 2%;" name="" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                <button style="margin-left: 2%;" name="" type="button" class="btn btn-success"><i class="far fa-money-bill-alt"></i></button>
            </td>


        </tr>

        <tr>
            <th scope="row">3</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button type="button" name=""  class="btn btn"><i class="fa fa-pencil-alt"></i></button>
                <button style="margin-left: 2%" name="" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                <button style="margin-left: 2%" name="" type="button" class="btn btn-success"><i class="far fa-money-bill-alt"></i></button>
            </td>


        </tr>

    </table>
</div>
<script>
    $(document).ready(function() {
        $('.search-box input[type="text"]').on("keyup input", function() {

            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if (inputVal.length) {
                $.get("backend-search.php", {
                    term: inputVal,
                    ctr: "FormHistory"
                }).done(function(data) {

                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });

        $(document).on("click", ".result", function() {
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
</script>
