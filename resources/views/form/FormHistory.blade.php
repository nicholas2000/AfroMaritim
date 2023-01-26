
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
    <div class="col-md-3 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
            <input name="" placeholder="Cari Transaksi" class="form-control"  type="text" >
        </div>
        <br>
        <div class="">Nama Karyawan</div>
    </div>
    <br>
    <div class="col-12">
        <table class="table table-bordered">

            <tr style="background-color:  #ec1d24;color: white;">

                <th scope="col"> <center>History Transaksi</center></th>

            </tr>

            <tr>


               <td> <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                    <input name="" placeholder="Cari Transaksi" class="form-control"  type="text" >
                </div>
            </td>
            <td><div class="">Data Live Search</div>
                <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
            </td>
            <td><div class="">Nomor Kapal</div>
                    <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
            </td>
            </tr>
            <tr>
                <td>
            </td>
                <td><div class="">Nama Customer</div>
                    <div class="col-sm-4"><input style="width: 120px;"type='text' disabled></div>
            </td>
            <td><div class="">Nomor Container</div>
                <div class="col-sm-4"><input style="width: 120px;"type='text' enabled></div>
        </td>
            </tr>

            <tr>

            <td></td>
                <td><div class="">Tanggal Pengiriman</div>
                    <div class="col-sm-4"><input style="width: 120px;"type='text' disabled></div>
            </td>
            </tr>


        </table>
    </div>
    <button type="button" style="float: right;" name="" class="btn btn-outline-danger">Update</button>
</section>
