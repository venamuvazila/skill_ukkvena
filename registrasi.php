<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Kasir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="kotak-regist">

    <h2>Registrasi Kasir</h2>

    <form action="home.php" method="post">

        <div class="baris">
            <label>Nama</label>
            <input type="text" name="nama">
        </div>

        <div class="baris">
            <label>Shift</label>
            <input type="text" name="alamat">
        </div>

        <div class="baris">
            <label>Jabatan</label>

            <input type="radio" name="jabatan" value="Administrator">
            Administrator

            <input type="radio" name="jabatan" value="Petugas">
            Petugas
        </div>

        <button type="submit"> Submit</button>

    </form>

</div>

</body>
</html>