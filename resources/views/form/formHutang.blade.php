{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script> --}}

<section class="order-form m-4">
    <div class="container pt-4">
        <div class="container">
            <div class="col-12">
                <h1>Form Hutang</h1>
                <hr class="mt" />
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="search" class="form-control rounded" placeholder=" Search" style="width: 30%;"
                                aria-label="Search" aria-describedby="search-addon" />
                            <button type="button" class="btn btn-outline-primary"
                                style="margin-left: 2px">Search</button>
                        </div>
                    </div>
                    <div class="col"></div>

                </div>
                <hr class="mt" />
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="container">
            <div class="col-12">

                <div class="row">
                    <div class="col-sm-2">

                    </div>

                    <div class="col">

                    </div>

                    <div class="col" >

                    </div>

                    <div class="col" >

                    </div>

                    <div class="col">

                    </div>

                    <div class="col" >
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span>
                            Refresh</button>
                    </div>

                    <div class="col" >
                        <button type="button" class="btn btn-success">Export</button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-eye" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z">
                                </path>
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-4">
        <div class="container">
            <div class="col-12">

                <div class="row">
                    <div class="col-sm-4" >
                        <h4>Hutang</h4>
                        <br>
                        3 Desember 2022
                    </div>

                    <div class="col" >
                        <div class="input-group">
                            <input type="search" class="form-control rounded" placeholder="Cari" style="width: 30%;"
                                aria-label="Search" aria-describedby="search-addon" />
                        </div>
                    </div>
                    <div class="col" >
                        <select id="inputState" class="form-control">
                            <option selected>Semua</option>
                            <option>semua1</option>
                            <option>semua1</option>
                        </select>
                    </div>

                    <div class="col">
                        <input type="date" class="form-control" name="sttglpsnformpo" id="sttglpsnformpo"
                            placeholder="">
                    </div>

                    <div class="col">
                        <input type="date" class="form-control" name="sttglpsnformpo" id="sttglpsnformpo"
                            placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <table id="datatables" class="table table-bordered">

            <tr style="background-color:  #023e94;color: white;">
                <th scope="col">No Transaksi</th>
                <th scope="col">
                    <center>Nama Customer</center>
                </th>
                <th scope="col">
                    <center>Total Hutang</center>
                </th>
                <th scope="col">
                    <center>Alamat</center>
                </th>
                <th scope="col">
                    <center>Batas Waktu Pembayaran</center>
                </th>
                <th scope="col">
                    <center>Status Hutang</center>
                </th>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>Andi</td>
                <td>50.000</td>
                <td>Jalan meteor no 50</td>
                <td>8/2/2023</td>
                <td>Aktif</td>
            </tr>

            <tr>
                <th scope="row">2</th>
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
            </tr>

        </table>
    </div>
</section>
