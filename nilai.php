<?php
    $sql = $_GET["Nis"];
    $server = mysqli_connect("localhost","root","","latihan_xpplg");
    echo $sql; 

    $sql = "DELETE FROM final WHERE Nis = '$sql'";

    $query = mysqli_query($server, $sql);
    if ($query) {
        echo "Data berhasil dihapus!";
        echo "<a href='final.php'> Tampilkan Data</a>";
    } else {
        echo "Penghapusan gagal sebab : <br>".mysqli_error($server);
    }
    ?>



echo"<tr><th>No :</th></tr>"
            <th>Nama :</th>      
            <th>Nis :</th>        
            <th>Rayon :</th>           
            <th>Tanggal Lahir :</th>
            <th>Alamat :</th>
            <th>Sekolah :</th>
            <th>Delete :</th>

      

        <tr>
            <td><?= $data["No"] ; ?></td>
            <td><?= $data["Nama"] ; ?></td>
            <td><?= $data["Nis"] ; ?></td>
            <td><?= $data["Rayon"] ; ?></td>
            <td><?= $data["Tanggal_lahir"] ; ?> </td>
            <td><?= $data["Alamat"] ; ?> </td>
            <td><?= $data["Sekolah"] ; ?> </td>
            <td><a href="hapus.php?Nis=<?php echo $data['Nis'] ?>">Hapus</a> </td>
        </tr>
