<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        @media screen and (max-width: 600px) {
            .p {
                margin-left: 10%;
            }
        }
    </style>
</head>
<body>
    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="container">
                <div class="col-12 ">
                    <h1> Form Master Customer</h1>
                    <hr class="mt" />
                </div>
                <br>


                <div class="col-12">
                   <button style="float: right;" type="button" class="btn btn-primary">Tambah</button>
                </div>
                <br><br>
                <div class="col-12">
                    <table class="table table-bordered">
                        <tr style="background-color:  #ec1d24;color: white;">
                                <th scope="col">No</th>
                                <th scope="col"> <center>ID Customer</center> </th>
                                <th scope="col"> <center>Nama Customer</center> </th>
                                <th scope="col"> <center>Alamat Customer</center> </th>
                                <th scope="col"> <center>Total Hutang</center> </th>
                                <th scope="col"> <center>Batas Pembayaran</center> </th>
                            </tr>
    
                            <tr>
                                <th scope="row">1</th>
                                <th scope="col"> <center>JJ01</center> </th>
                                <th scope="col"> <center>Jordan Joshua</center> </th>
                                <th scope="col"> <center>Prapen Indah Utara 12</center> </th>
                                <th scope="col"> <center>12.000.000</center> </th>
                                <th scope="col"> <center>10/1/2023</center> </th>
                            </tr>
    
                            <tr>
                                <th scope="row">2</th>
                                <th scope="col"> <center>EG01</center> </th>
                                <th scope="col"> <center>Evan Gunawan</center> </th>
                                <th scope="col"> <center>Baruk Utara 21</center> </th>
                                <th scope="col"> <center>13.000.000</center> </th>
                                <th scope="col"> <center>21/2/2023</center> </th>
                            </tr>
    
                            <tr>
                                <th scope="row">3</th>
                                <th scope="col"> <center>NJ01</center> </th>
                                <th scope="col"> <center>Novi Jevia</center> </th>
                                <th scope="col"> <center>Jend.Sudirman XXII,Nganjuk</center> </th>
                                <th scope="col"> <center>7.000.000</center> </th>
                                <th scope="col"> <center>31/2/2023</center> </th>
                            </tr>
                        </table>
                </div>

            </div>
    </section>

</body>
<script>
    function onlyNumberKey(evt) {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }

    function show1() {
        document.getElementById('div1').style.display = 'block';
    }

    function show2() {
        document.getElementById('div1').style.display = 'none';
    }
</script>

</html>
