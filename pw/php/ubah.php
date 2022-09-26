<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

$id = $_GET['id'];
$brg = query("SELECT * FROM barang WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Successfully changed!');
                    document.location.href = 'admin.php';
                </script>";
    
    } else {
        echo "<script>
                    alert('Failed to change!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Change Novel</title>
</head>
<body>
<h3>Form Update Novel</h3>
<form action="" method="post">
    <ul>
        <input type="hidden" name="id" id="id" value="<?= $brg['id']; ?>"
        <li>
        <label for="gambar">Image :</label><br>
        <input type="text" name="gambar" id="gambar" required value="<?= $brg['gambar']; ?>"/></td></tr>
        </li>
        <li>
        <label for="nama">Name :</label><br>
        <input type="text" name="nama" id="nama" required value="<?= $brg['nama']; ?>"><br><br>
        </li>
        <li>
        <label for="detail">Author :</label><br>
        <input type="text" name="detail" id="detail" required value="<?= $brg['detail']; ?>"><br><br>
        </li>
        <li>
        <label for="size">Genre :</label><br>
        <input type="text" name="size" id="size" required value="<?= $brg['size']; ?>"><br><br>
        </li>
        <li>
        <label for="harga">Years :</label><br>
        <input type="text" name="price" id="harga" required value="<?= $brg['harga']; ?>"><br><br>
        </li>
        <li>
        <label for="stok">Stock :</label><br>
        <input type="text" name="stok" id="stok" required value="<?= $brg['stok']; ?>"><br><br>
        </li>
        </td></tr>
        <br>
        <button type="submit" name="ubah">Update</button>
        <button type="submit">
            <a href="./admin.php" style="text-decoration: none; color: black;">Back</a>
        </button>
    </ul>
</body>
</html>