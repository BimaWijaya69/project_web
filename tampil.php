<?php 
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
</head>
<body>
    <center>
        <h2>DAFTAR STOK BAJU</h2>
        <a href="add.php">
            <button>Tambah Stok Baju</button>
        </a><p>
        <table width="370" border="1" cellpadding="10">
            <thead>
                <tr>
                    <th width="60">Id Baju</th>
                    <th width="133">Nama Baju</th>
                    <th width="85" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $stok = mysqli_query($mysqli, "SELECT * FROM stok");

                    while ($show = mysqli_fetch_array($stok)) {
                ?>
                <tr>
                    <td><center><?php echo $show['id']; ?></center></td>
                    <td><?php echo $show['baju']; ?></td>
                    <td><a href="update.php?id=<?php echo $show['id']; ?>"><button>edit</button></a>
                        <a href="deletesql.php?id=<?php echo $show['id']; ?>"><button>delete</button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <p>
            <a href="print.php"><button>Print Stok</button></a>
        <p>
            <a href="logout.php"><button>Log Out</button></a>
    </center>
</body>
</html>
