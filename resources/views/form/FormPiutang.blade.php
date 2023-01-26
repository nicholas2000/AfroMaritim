<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<form action="/tambahformnopo" >
    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="container">
                <div class="col-12">
                    <h1>Form Purchase Order</h1>
                    <hr class="mt" />
                </div>

                <br>
                <div class="col-12 ">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <br><br>
                </div>




                <div class="col-12">
                    <table class="table table-bordered">
                        <tr style="background-color:  #ec1d24;color: white;">
                            <th scope="col">No</th>
                            <th scope="col"> <center>Jenis Barang</center> </th>
                            <th scope="col"> <center>Harga</center> </th>
                            <th scope="col"> <center>Quantity</center> </th>
                            <th scope="col"> <center>Diskon</center> </th>
                            <th scope="col"> <center>Harga</center> </th>
                            <th scope="col"> <center>PPN</center> </th>
                            <th scope="col"> <center>NET</center> </th>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td><center>K1</center> </td>
                            <td><center>9000</center></td>
                            <td><center>10</center></td>
                            <td><center>10%</center></td>
                            <td><center>9000</center></td>
                            <td><center>11%</center></td>
                            <td><center>9990</center></td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td><center>K2</center> </td>
                            <td><center>13500000</center></td>
                            <td><center>10</center></td>
                            <td><center>11%</center></td>
                            <td><center>100</center></td>
                            <td><center>11%</center></td>
                            <td><center>14985000</center></td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td><center>K3</center> </td>
                            <td><center>17400000</center></td>
                            <td><center>10</center></td>
                            <td><center>13%</center></td>
                            <td><center>1740000</center></td>
                            <td><center>11%</center></td>
                            <td><center>19314000</center></td>
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
</form>

