<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .container {
        padding: 2rem 0rem;
        }

        h4 {
        margin: 2rem 0rem 1rem;
        }

        .table-image {
            td, th {
                vertical-align: middle;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <fieldset>

        <!-- Form Add Customer -->
            <legend><h2><b>History Penawaran</b></h2></legend><br>
            <div class="row">
              <div class="col-12">
                <table class="table table-bordered" >
                  <thead>
                    <tr style="background-color:  #ec1d24;color: white;">
                      <th scope="col">No</th>
                      <th scope="col">Nama Customer</th>
                      <th scope="col">Total Item</th>
                      <th scope="col">Total Nominal</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Andi</td>
                      <td>4</td>
                      <td>Rp 200.000</td>
                      <td>
                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i></button>
                        <button style="margin-left: 2%" type="button" class="btn btn-danger"><i class="fa fa-times"></i></button>
                      </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Budi</td>
                        <td>7</td>
                        <td>Rp 350.000</td>
                        <td>
                          <button type="button" class="btn btn-success"><i class="fa fa-check"></i></button>
                          <button style="margin-left: 2%" type="button" class="btn btn-danger"><i class="fa fa-times"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Doni</td>
                        <td>2</td>
                        <td>Rp 100.000</td>
                        <td>
                          <button type="button" class="btn btn-success"><i class="fa fa-check"></i></button>
                          <button style="margin-left: 2%" type="button" class="btn btn-danger"><i class="fa fa-times"></i></button>
                        </td>
                      </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </fieldset>
    </div>
</body>

</html>
