<!DOCTYPE html>
<html>
<head>
    <title>Login Administration</title>
</head>

<body>
    <header>Masukan Username Dan Password</header>

    <form action="home.php" method="POST">
        <fieldset>
            <p>
                <label for="username">Username: </label>
                <input type="text" name="username" placeholder="masukkan username disini">
            </p>
            <p>
                <label for="password">Password: </label>
                <input type="text" name="password" placeholder="masukkan passwordmu disini">
            </p>
            <p>
                <button type="submit">Log In</button>
            </p>
        </fieldset>
    </form>

    <?php
    $error = '';
    if(isset($_GET['error'])){
        $error = $_GET['error'];
    }

    $pesan = '';

    if($error == 'login'){
        $pesan = 'Maaf Username / Password yang anda masukkan salah';
    }
    else if($error == 'invalid'){
        $pesan = 'Username / Password Harus Diisi !';
    }

    if($pesan != ''){
        echo $pesan;
    }
    ?>
</body>
</html>