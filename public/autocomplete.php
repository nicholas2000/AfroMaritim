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
    }else if($_REQUEST["ctr"]=="Ftrans"){
        if(isset($_POST["query"])){
            $output = '';
            $query = "SELECT * FROM master_tcustomer WHERE nama_customer LIKE '%".$_POST["query"]."%'";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0){
                $output= '<ul class="list-unstyled" id="package_nama">';
                while($row = mysqli_fetch_array($result)){
                    $temp = ' data-alamat="'.$row['jalan'].'" data-hp="' . $row['telpon'] . '" data-email="' . $row['email'] . '"';
                    $output .= '<li><div id="' . $row['id_customer'] . '"' . $temp .'>'.$row['id_customer'].' - '.$row["nama_customer"].'</div></li>';
                }
                $output .= '</ul>';
            }
            echo $output;
        }
    }else if($_REQUEST["ctr"]=="Ftransdepo"){
        if(isset($_POST["query"])){
            $output = '';
            $query = "SELECT * FROM master_tcustomer WHERE nama_customer LIKE '%".$_POST["query"]."%'";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0){
                $output= '<ul class="list-unstyled" id="package_nama">';
                while($row = mysqli_fetch_array($result)){
                    $temp = ' data-alamat="'.$row['jalan'].'" data-hp="' . $row['telpon'] . '" data-email="' . $row['email'] . '"';
                    $output .= '<li><div id="' . $row['id_customer'] . '"' . $temp .'>'.$row['id_customer'].' - '.$row["nama_customer"].'</div></li>';
                }
                $output .= '</ul>';
            }
            echo $output;
        }
    }else if($_REQUEST["ctr"]=="Fnoresi"){
        if(isset($_POST["query"])){
            $output = '';
            $query = "SELECT * FROM transaksi WHERE nomor_resi LIKE '%".$_POST["query"]."%' AND (status_barang = 'Depo SBY' OR status_barang = 'Kantor SBY')";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0){
                $output= '<ul class="list-unstyled" id="package_resi">';
                while($row = mysqli_fetch_array($result)){
                    $temp = ' data-nomorcontainer="'.$row['nomor_container'].'" data-noresi="'.$row['nomor_resi'].'" data-pengirim="' . $row['nama_pengirim'] . '" data-penerima="' . $row['nama_penerima'] .
                        '" data-alamatpengirim="' . $row['alamat_pengirim'] . '" data-nohppengirim="' . $row['nohp_pengirim'] . '" data-emailpengirim="' . $row['email_pengirim'] .
                        '" data-alamatpenerima="' . $row['alamat_penerima'] . '" data-nohppenerima="' . $row['nohp_penerima'] . '" data-emailpenerima="' . $row['email_penerima'] .
                        '" data-namabarang="' . $row['jenis_barang'] . '" data-jenisukuran="' . $row['jenis_volume'] . '" data-nominalukuran="' . $row['volume'] .
                        '" data-jumlah="' . $row['jumlah_barang'] . '" data-namakapal="' . $row['nama_kapal'] . '" data-tanggal="' . $row['tanggal']. '" data-jenisharga="' .
                        $row['jenis_harga'] . '" data-hargakubik="' . $row['harga_kubik'] . '" data-harga="' . $row['harga'] . '" data-hargatambahan="' . $row['harga_tambahan'] .
                        '" data-hargapotongan="' . $row['harga_potongan'] . '" data-totalharga="' . $row['total_harga'] . '"';
                    $output .= '<li><div id="' . $row['nomor_resi'] . '" ' . $temp . '>'.$row['nomor_resi'].'</div></li>';
                }
                $output .= '</ul>';
            }
            echo $output;
        }
    }else if($_REQUEST["ctr"]=="Fcontainerdepo"){
        if(isset($_POST["query"])){
            $output = '';
            $query = "SELECT * FROM master_tcontainer WHERE nomor_container LIKE '%".$_POST["query"]."%' AND status=1";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0){
                $output= '<ul class="list-unstyled" id="package_cont">';
                while($row = mysqli_fetch_array($result)){
                    $output .= '<li><div id="' . $row['nomor_container'] . '">'.$row['nomor_container'].'</div></li>';
                }
                $output .= '</ul>';
            }
            echo $output;
        }
    }else if($_REQUEST["ctr"]=="Flisttransaksi"){
        if(isset($_POST["query"])){
            $query = "SELECT * FROM transaksi WHERE nomor_container = '". $_POST["query"] ."'";
            $result = mysqli_query($connect, $query);
            $ctr = 1;
            $output = "";
            foreach ($result as $res){
                $output .= '
                    <tr>
                        <td><input type="checkbox" value="' . $res["nomor_resi"] . '" onclick="myFunction(tdis)"></td>
                        <td scope="row">' . $ctr . '</td>
                        <td scope="col"><center>' . $res["nomor_resi"] . '</center></td>
                        <td scope="col"><center>' . $res["tanggal"] . '</center></td>
                        <td scope="col"><center>' . $res["status_barang"] . '</center></td>
                        <td scope="col" style="text-align:center;">
                            <form action="" method="POST">
                                <meta content="authenticity_token" name="csrf-param" />
                                <button name="" type="submit" class="btn btn"><i class="fa fa-pencil"></i></button>
                            </form>
                        </td>
                    </tr>
                ';
                $ctr++;
            }
            echo $output;
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

