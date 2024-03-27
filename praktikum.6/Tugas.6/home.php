<?php
    include 'koneksi.php';

    // show data
    $query = "SELECT * FROM morevape";
    $result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Divace</h2>
    <table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Merk</th>
            <th>Jenis</th>
            <th>Warna</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php while ( $row = $result->fetch_assoc()) { ?>
        <tr>
            <td> <?= $row['id']?> </td>
            <td> <?=$row['merk']?> </td>
            <td> <?=$row['jenis']?> </td>
            <td> <?=$row['warna']?> </td>
            <td> <?=$row['harga']?> </td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
     <?php } ?>
    </table>

    <br>
    <h2>Tambah Mahasiswa</h2>
    <form action="insert.php" method="POST">
        Merk: <input type="text" name="merk" required><br>
        Jenis: <input type="text" name="jenis" required><br>
        Warna: <input type="text" name="warna" required><br>
        Harga: <input type="number" name="harga" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>