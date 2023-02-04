<?php

$link = mysqli_connect("localhost", "root", "", "db_afromaritim");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


    if($_REQUEST["ctr"]=="FormTransaksi"){
        $sql = "SELECT * FROM master_tcabang WHERE nama_cabang LIKE ?";

        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_term);

            $param_term = '%%';
            if(isset($_REQUEST["term"])){
                $param_term = '%' . $_REQUEST["term"] . '%';
            }

            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) > 0){

                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<option style='height:20px;'>" . $row["nama_cabang"] . "</option>";
                    }
                } else{
                    echo "<div style='height:20px;'>No matches found</div>";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }

        mysqli_stmt_close($stmt);
    }else if($_REQUEST["ctr"]=="FormHistory"){

    }



mysqli_close($link);
?>
