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
<style>
    .btn {
        background-color: DodgerBlue;
        border: none;
        color: white;
        padding: 5px 5px;
        cursor: pointer;
        font-size: 15px;
        position: center;
    }

    /* Darker background on mouse-over */
    .btn:hover {
        background-color: RoyalBlue;
    }

    .custom-file-upload {
        background-color: DodgerBlue;
        border: none;
        color: white;
        padding: 5px 5px;
        cursor: pointer;
        font-size: 15px;
        position: center;
    }

</style>
<section class="order-form m-4">
    <div class="container pt-4">
        <div class="container">
            <div class="col-12 ">
                <h1> Form Surat Jalan</h1>
                <hr class="mt" />
            </div>
            <br>
            <div class="col-12 ">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <br>
            </div>
            <br>

            <div class="col-3">
                <div class="row">
                    <div class="col-md-8">Nama Pembuat</div>
                    <div>:</div>
                    <div class="col-md-3"><input type='text' placeholder=""></div>
                    <br><br>
                </div>

                <div class="row">
                    <div class="col-md-8">Nama Pengirim </div>
                    <div>:</div>
                    <div class="col-md-3"><input type='text'></div>
                    <br><br>
                </div>

                {{-- ----- --}}

            </div>

            <div class="col-12">
                <table class="table table-bordered">

                    <tr style="background-color:  #ec1d24;color: white;">
                        <th scope="col">No</th>
                        <th scope="col">
                            <center>Jenis Barang</center>
                        </th>
                        <th scope="col">
                            <center>Tanggal Barang Datang</center>
                        </th>
                        <th colspan="2">
                            <center>Surat Jalan</center>
                        </th>
                        <th colspan="2">
                            <center>Surat Perintah Kerja</center>
                        </th>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td>
                            <button style="width:100%" class="btn" onclick="window.location.href='Surat_Jalan.docx';">Download</button>
                        </td>
                        <td>
                            <label for="file-upload" class="btn custom-file-upload "  style="width:100%">Upload</label>
                            <input  class="fa fa-cloud-upload" id="file-upload" type="file" style="display: none"onchange="uploadFile(this.files)" />
                        </td>
                        <td>
                            <button style="width:100%" class="btn" onclick="window.location.href='Surat_Jalan.docx';">Download</button>
                        </td>
                        <td>
                            <label for="file-upload" class="btn custom-file-upload "  style="width:100%">Upload</label>
                            <input  class="fa fa-cloud-upload" id="file-upload" type="file" style="display: none"onchange="uploadFile(this.files)" />
                        </td>
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

    function uploadFile(files) {
        console.log('Files:', files);
        console.log('Upload initial');
    }

</script>
