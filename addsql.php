<?php
    include "connection.php";

    if (isset($_POST['simpan'])){
        $id         = $_POST['id'];
        $nama_baju  = $_POST['baju'];

        $data = mysqli_query($mysqli, "INSERT INTO stok (id, baju) VALUES ('$id', '$nama_baju')")
                or die ("data salah : ".mysqli_error($mysqli));
        
        if ($data) {
            echo "<script>
                    alert('Data Berhasil Disimpan');
                    window.location.replace('tampil.php');
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Disimpan');
                    window.location.replace('add.php');
                  </script>";
        }
    }
?>
