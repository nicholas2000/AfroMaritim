
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
    <div class="form-group">
        <div class="container">
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm">
                History Transaksi
              </div>

            </div>
          </div>
    </div>

    <button style="float: right;" type="button" class="btn btn-primary">Back</button>
</section>
<br>
<br>
<br>

<div class="col-12">
    <table id="datatables" class="table table-bordered">

        <tr style="background-color:  #023e94;color: white;">
            <th scope="col">No.</th>
            <th scope="col">
                <center>Nama Customer</center>
            </th>
            <th scope="col">
                <center>Total Item</center>
            </th>
            <th scope="col">
                <center>Total Nominal</center>
            </th>
            <th scope="col">
                <center>Acc</center>
            </th>
        </tr>

        <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button style="margin-left: 2%" name="" type="button" class="btn btn-success">Accept</button>
                <button style="margin-left: 2%" name="" type="button" class="btn btn-danger">Decline</button>
               </td>

        </tr>

        <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button style="margin-left: 2%" name="" type="button" class="btn btn-success">Accept</button>
                <button style="margin-left: 2%" name="" type="button" class="btn btn-danger">Decline</button>
               </td>


        </tr>

        <tr>
            <th scope="row">3</th>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button style="margin-left: 2%" name="" type="button" class="btn btn-success">Accept</button>
                <button style="margin-left: 2%" name="" type="button" class="btn btn-danger">Decline</button>
                </td>


        </tr>

    </table>
</div>
<script>
    $(document).ready(function() {
        $('.search-box input[type="text"]').on("keyup input", function() {

            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if (inputVal.length) {
                $.get("backend-search.php", {
                    term: inputVal,
                    ctr: "FormHistory"
                }).done(function(data) {

                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });

        $(document).on("click", ".result", function() {
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
</script>
