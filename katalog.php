<?php
include "connection.php";
session_start();
if (!isset($_SESSION["hak_akses"])) {
    header("Location: login.php");
    exit();
} else {
    ?>
    <html>

    <head>
        <title>Tampil</title>
    </head>

    <body>
        <center>
            <p>
                <font color="blue">
                    <h2>Selamat datang <?= $_SESSION['username']; ?></h2>
                </font>
            </p>
            <h2>KATALOG BAJU</h2>
            <p>
            <table width="370" border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th width="60">No Baju</th>
                        <th width="133">Nama Baju</th>
                    </tr </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $stok = mysqli_query($mysqli, "SELECT * FROM stok");
                    while ($show = mysqli_fetch_array($stok)) {
                        ?>
                        <tr>
                            <td>
                                <center> <?php echo $no ?></center>
                            </td>
                            <td><?php echo $show['baju']; ?></td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
            <p>
                <a href="logout.php"><button> Log Out</button>
                </a>
            </p>
        </center>
    </body>

    </html>
<?php } ?>