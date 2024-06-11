<?php
    include "connection.php";
    $data = mysqli_query($mysqli, "SELECT * FROM stok WHERE id='$_GET[id]'");
    $datashow = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<center>
    <h2>Update Data Barang</h2>
    <form action="updatesql.php" method="post">
        <table>
            <tr>
                <td>Id Baju</td>
                <td><input type="text" name="id" value="<?php echo $_GET['id'];?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Baju</td>
                <td><input type="text" name="baju" value="<?php echo $datashow['baju'];?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="EDIT" name="update"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>