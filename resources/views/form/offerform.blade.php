
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
    <div class="container pt-4">
        <div class="row">
            <div class="col-12 ">
                <h1>Purchase Order</h1>

                <hr class="mt" />
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 form-group">
                    <div class="p">
                        <div class="col-sm-4" >Nomor PO</div>
                        <div>:</div>
                        <div class="col-sm-3"><input style="width: 180px;"type='text' placeholder="Masukan Nomor PO " ></div>
                    </div>
                    <br>
                    <div class="p">
                        <div class="col-sm-4">Kode</div>
                        <div>:</div>
                        <div class="col-sm-3"><input style="width: 180px;"type='text' placeholder="Masukan Kode " ></div>
                    </div>
                    <br>
                    <div class="p">
                        <div class="col-sm-4">Supplier </div>
                        <div>:</div>
                        <div class="col-sm-3">
                            <select style="width: 180px;" class="form-control selectpicker">
                                <option value="">Pilih Supplier</option>
                                <option>Andi</option>
                                <option>Doni</option>
                                <option>Tono</option>
                                <option>Sisil</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="p">
                        <div class="col-sm-4">Alamat </div>
                        <div>:</div>
                        <div class="col-sm-3"><input style="width: 180px;"type='text' disabled></div>
                    </div>
                    <br>
                    <div class="p">
                        <div class="col-sm-4">Telp/Fax </div>
                        <div>:</div>
                        <div class="col-sm-3"><input style="width: 180px;"type='text' disabled></div>
                    </div>
                    <br>
                    <div class="p">
                        <div class="col-sm-4">Item </div>
                        <div>:</div>
                        <div class="col-sm-3">
                            <select style="width: 180px;"class="form-control selectpicker">
                                <option value="">Pilih Item</option>
                                <option>Item1</option>
                                <option>Item2</option>
                                <option>Item3</option>
                                <option>Item4</option>
                            </select>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-12 col-md-4 form-group">
                    <div class="p pk">
                        <div class="col-sm-4">Sales</div>
                        <div>:</div>
                        <div class="col-sm-3">Admin</div>
                    </div>
                    <br>
                    <div class="p pk">
                        <div class="col-sm-4">Date</div>
                        <div>:</div>
                        <div class="col-sm-3">1/19/2023</div>
                    </div>
                    <br>
                    <div class="p pk">
                        <div class=" col-sm-4">Subtotal</div>
                        <div>:</div>
                        <div class="col-sm-3">0</div>
                    </div>
                    <br>
                    <div class="p pk">
                        <div class=" col-sm-4">Pajak</div>
                        <div>:</div>
                        <div class="col-sm-3">0</div>
                    </div>
                    <br>
                    <div class="p pk">
                        <div class=" col-sm-4">Total</div>
                        <div>:</div>
                        <div class="col-sm-3">0</div>
                    </div>
                    <br>
                    <div class="p pk">
                        <div class=" col-sm-4">TOP</div>
                        <div class="col-sm-3"><button class="btn btn-primary" type="submit">SUBMIT</button></div>
                    </div>
                    <br>
                </div>
                <br>

            <div class="col-12">
                <table class="table table-bordered">
                    <tr style="background-color:  #ec1d24;color: white;">
                        <th scope="col">No</th>
                        <th scope="col"> <center>Kode</center> </th>
                        <th scope="col"> <center>Item Name</center> </th>
                        <th scope="col"> <center>Satuan</center> </th>
                        <th scope="col"> <center>Quantity</center> </th>
                        <th scope="col"> <center>Selling Price</center> </th>
                        <th scope="col"> <center>Disc</center> </th>
                        <th scope="col"> <center>Subtotal</center> </th>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td><center>K1</center> </td>
                        <td><center>Kardus 1</center></td>
                        <td><center>lembar</center></td>
                        <td><center>1000</center></td>
                        <td><center>10000</center></td>
                        <td><center>10%</center></td>
                        <td><center>9000000</center></td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td><center>K2</center> </td>
                        <td><center>Kardus 2</center></td>
                        <td><center>lembar</center></td>
                        <td><center>1500</center></td>
                        <td><center>10000</center></td>
                        <td><center>11%</center></td>
                        <td><center>13350000</center></td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td><center>K3</center> </td>
                        <td><center>Kardus 3</center></td>
                        <td><center>lembar</center></td>
                        <td><center>2000</center></td>
                        <td><center>10000</center></td>
                        <td><center>13%</center></td>
                        <td><center>17400000</center></td>
                    </tr>

                </table>
                <div class="row">
                    <div class="col">
                        <br>
                        Note : <br>
                        ~Harga sewaktu - waktu dapat berubah
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>

                    <div class="col">
                        <br>
                        <button type="button" style="float: right;" name="btnresetform" class="btn btn-outline-danger">Reset</button>
                    </div>
                  </div>
                </div>

            </div>

        </div>
    </div>
</section>
