<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<form action="/tambahPo" >
    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="container">
                <div class="col-12">
                    <h1>Form Purchase Order</h1>
                    <hr class="mt" />
                </div>

                <br>


                <div class="col-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                Nomor PO
                            </div>
                            <div class="col"  >
                                <input type="number" class="form-control" name="tnopotformpo" id="tnopotformpo" placeholder="Nomor">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                ID Supplier
                            </div>
                            <div class="col" >
                                <input type="text" class="form-control" name="tidsupformpo" id="tidsupformpo" placeholder="Jenis Barang">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                Nama Supplier
                            </div>
                            <div class="col"  >
                                <input type="text" class="form-control" name="tnamasupformpo" id="tnamasupformpo" placeholder="Jenis Barang">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                Total Barang
                            </div>
                            <div class="col"  >
                                <input type="text" class="form-control" name="ttotbrgformpo" id="ttotbrgformpo" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                Total Barang
                            </div>
                            <div class="col"  >
                                <input type="text" class="form-control" name="ttotnomformpo" id="ttotnomformpo" placeholder="" disabled>
                            </div>
                        </div>
                    </div><br>
                    <div class="container">
                        <div class="row">
                            <div class="col-3" style="padding-top: 5px; " >
                                Tanggal Pemesanan
                            </div>
                            <div class="col"  >
                                <input type="date" class="form-control" name="ttglpsnformpo" id="ttglpsnformpo" placeholder="" >
                            </div>
                        </div>
                    </div>


                    <br>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>

                        <div class="col">
                            <input class="btn btn-primary" type="submit" style="float: right; margin-right: 15px; " name="btnsubmittambah" value="Tambah">
                        </div>
                      </div>
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

