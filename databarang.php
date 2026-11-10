<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Barang In/Out</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kotak-data">
    <h2>Data Barang In/Out</h2>
    <a href="tambahbarang.php">+ Tambah Baru</a>
    <br><br>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM produk");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['Nama Barang']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
            </td>
            <td>
                <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

</div>

</body>
</html>