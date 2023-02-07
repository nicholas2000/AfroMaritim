<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
@if ($errors->any())
                @foreach ($errors->all() as $err)
                    <div class="alert alert-danger">{{ $err }}</div>
                @endforeach
            @endif
<section class="order-form m-4">
    
    <div class="container pt-4">
        <div class="container">
            
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h1> Master Transaksi</h1>
                        <hr class="mt" />
                    </div>
                </div>
            </div>
            <br>
            <form action="{{ url('/doMasterTransaksi') }} " method="post">
                @csrf
                
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Nama Customer :
                        </div>
                        <div class="col-sm">
                            <input name="namacust" class="form-control" type="text" style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            Nomor Transaksi :
                        </div>
                        <div class="col-sm">
                            <input name="kode" class="form-control" type="text" style="width: 210px;" disabled>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Nama Barang :
                        </div>
                        <div class="col-sm">
                            <input name="namabarang" class="form-control" type="text"style="width: 210px;" >
                        </div>
                        <div class="col-sm-3">
                            Admin :
                        </div>
                        <div class="col-sm">
                            <input name="kode" class="form-control" type="text"style="width: 210px;" disabled>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Ukuran :
                        </div>
                        <div class="col-sm">
                            <input name="ukuran" class="form-control" type="text"style="width: 210px;" >
                        </div>
                        <div class="col-sm-3">
                            Volume :
                        </div>
                        <div class="col-sm">
                            <input name="volume" class="form-control" type="text"style="width: 210px;" >
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Berat :
                        </div>
                        <div class="col-sm">
                            <input name="berat" class="form-control" type="text"style="width: 210px;" >
                        </div>
                        <div class="col-sm-3">
                            Rute :
                        </div>
                        <div class="col-sm">
                            <input name="rute" class="form-control" type="text"style="width: 210px;" >
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Harga :
                        </div>
                        <div class="col-sm">
                            <input name="harga" class="form-control" type="text"style="width: 210px;" >
                        </div>
                        <div class="col-sm-3">
                            Jenis Harga :
                        </div>
                        <div class="col-sm-3">
                            <div class="col-auto">
                                <select name="jenisharga" class="custom-select" style="width: 210px;margin-left:-15px;"
                                    id="inlineFormCustomSelect">
                                    <option selected>Pilih</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Tonase :
                        </div>
                        <div class="col-sm">
                            <input name="tonase" class="form-control" type="text"style="width: 210px;" >
                        </div>
                        <div class="col-sm-3">
                            Harga Tambahan :
                        </div>
                        <div class="col-sm">
                            <input name="hargatambahan" class="form-control" type="text"style="width: 210px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Persentase :
                        </div>
                        <div class="col-sm">
                            <input name="persentase" class="form-control" type="text"style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            Total Harga :
                        </div>
                        <div class="col-sm">
                            <input name="totalharga" class="form-control" type="text"style="width: 210px;"
                                disabled>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Nama Kapal :
                        </div>
                        <div class="col-sm">
                            <input name="namakapal" class="form-control" type="text"style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            Nomor Container :
                        </div>
                        <div class="col-sm">
                            <input name="nocontainer" class="form-control" type="text"style="width: 210px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            Tanggal Berangkat :
                        </div>
                        <div class="col-sm">
                            <input name="tglberangkat" class="form-control" type="date"style="width: 210px;">
                        </div>
                        <div class="col-sm-3">
                            <br>
                            <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
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


