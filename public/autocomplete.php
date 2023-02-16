<?php
    $connect = mysqli_connect("localhost", "root", "", "db_afromaritim");

    if($_REQUEST["ctr"]=="Factivitytrue"){
        if(isset($_POST["query1"])&&isset($_POST["query2"])){
            $query = "UPDATE permission SET ".$_POST["query1"]. "= 1 WHERE daftar_berita='".$_POST["query2"]."'";
            $result = mysqli_query($connect, $query);
        }
    }else if($_REQUEST["ctr"]=="Factivityfalse"){
        if(isset($_POST["query1"])&&isset($_POST["query2"])){
            $query = "UPDATE permission SET ".$_POST["query1"]. "= 0 WHERE daftar_berita='".$_POST["query2"]."'";
            $result = mysqli_query($connect, $query);
        }
    }
    // else if($_REQUEST["ctr"]=="Fhistory"){
    //     if(isset($_POST["query"])){
    //         $output = '';
    //         $query = "SELECT * FROM transaksi WHERE nomor_transaksi LIKE '%".$_POST["query"]."%'";
    //         $result = mysqli_query($connect, $query);
    //         $output = '<ul class="list-unstyled">';

    //         if(mysqli_num_rows($result) > 0){
    //             while($row = mysqli_fetch_array($result)){
    //                 $output .= '<li>'.$row["nomor_transaksi"].'</li>';
    //             }
    //         }else{
    //             $output .= '<li>Nomor Transaksi Not Found</li>';
    //         }

    //     $output .= '</ul>';
    //     echo $output;
    //     }
    // }
    // else if($_REQUEST["ctr"]=="Fhistorynama"){
    //     if(isset($_POST["query"])){
    //         $output = '';
    //         $query = "SELECT mc.nama_customer FROM transaksi t,master_tcustomer mc WHERE t.id_customer=mc.id_customer and t.nomor_transaksi LIKE '%".$_POST["query"]."%'";
    //         $result = mysqli_query($connect, $query);

    //         if(mysqli_num_rows($result) > 0){
    //             while($row = mysqli_fetch_array($result)){
    //                 $output .= $row["nama_customer"];
    //             }
    //         }else{
    //             $output .= '';
    //         }

    //     echo $output;
    //     }
    // }
    // else if($_REQUEST["ctr"]=="Fhistorytanggal"){
    //     if(isset($_POST["query"])){
    //         $output = '';
    //         $query = "SELECT tanggal_berangkat FROM transaksi WHERE nomor_transaksi LIKE '%".$_POST["query"]."%'";
    //         $result = mysqli_query($connect, $query);

    //         if(mysqli_num_rows($result) > 0){
    //             while($row = mysqli_fetch_array($result)){
    //                 $output .= $row["tanggal_berangkat"];
    //             }
    //         }else{
    //             $output .= '';
    //         }

    //     echo $output;
    //     }
    // }
    // else if($_REQUEST["ctr"]=="Fhistorynamakapal"){
    //     if(isset($_POST["query"])){
    //         $output = '';
    //         $query = "SELECT nama_kapal FROM transaksi WHERE nomor_transaksi LIKE '%".$_POST["query"]."%'";
    //         $result = mysqli_query($connect, $query);

    //         if(mysqli_num_rows($result) > 0){
    //             while($row = mysqli_fetch_array($result)){
    //                 $output .= $row["nama_kapal"];
    //             }
    //         }else{
    //             $output .= '';
    //         }

    //     echo $output;
    //     }
    // }
    // else if($_REQUEST["ctr"]=="Fhistorynocontainer"){
    //     if(isset($_POST["query"])){
    //         $output = '';
    //         $query = "SELECT nomor_container FROM transaksi WHERE nomor_transaksi LIKE '%".$_POST["query"]."%'";
    //         $result = mysqli_query($connect, $query);

    //         if(mysqli_num_rows($result) > 0){
    //             while($row = mysqli_fetch_array($result)){
    //                 $output .= $row["nomor_container"];
    //             }
    //         }else{
    //             $output .= '';
    //         }

    //     echo $output;
    //     }
    // }
?>

