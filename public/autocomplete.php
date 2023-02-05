<?php
    $connect = mysqli_connect("localhost", "root", "", "db_afromaritim");

    if($_REQUEST["ctr"]=="Ftrans"){
        if(isset($_POST["query"])){
            $output = '';
            $query = "SELECT * FROM master_tcustomer WHERE nama_customer LIKE '%".$_POST["query"]."%'";
            $result = mysqli_query($connect, $query);
            $output = '<ul class="list-unstyled">';

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $output .= '<li>'.$row["nama_customer"].'</li>';
                }
            }else{
                $output .= '<li>User Not Found</li>';
            }

        $output .= '</ul>';
        echo $output;
        }
    }
?>
