<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

    <div class="container">
        <form class="form-horizontal" action=" " method="post"  id="contact_form">
    <fieldset>

    <!-- Form Add Box Model -->
    <legend><h2><b>Tambah Box Model</b></h2></legend><br>

    <!-- input kode-->

    <div class="form-group">
        <label class="col-md-4 control-label" >Kode</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                <input name="kode" placeholder="Enter Kode" class="form-control"  type="text" >
            </div>
        </div>
    </div>

    <!--input type-->
    <div class="form-group">
        <label class="col-md-4 control-label">Tipe Box</label>
          <div class="col-md-4 selectContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-tags"></i></span>
                  <select name="typeBox" class="form-control selectpicker">
                      <option value="">Pilih tipe Box</option>
                      <option>Box1</option>
                      <option>Box2</option>
                      <option>Box3</option>
                      <option>Box4</option>
                  </select>
              </div>
          </div>
      </div>

    <!-- input itemJoint-->
    <div class="form-group">
      <label class="col-md-4 control-label">Item Joint</label>
        <div class="col-md-4 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
                <select name="itemJoint" class="form-control selectpicker">
                    <option value="">Pilih Item Joint</option>
                    <option>itemJoint1</option>
                    <option>itemJoint2</option>
                    <option>itemJoint3</option>
                    <option>itemJoint4</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4"><br>
        <center><button type="button" class="btn btn-primary">Tambah</button></center>
      </div>
    </div>

    </fieldset>
    </form>
    </div>
        </div><!-- /.container -->
</body>
</html>
