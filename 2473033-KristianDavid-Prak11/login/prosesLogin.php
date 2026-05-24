<?php

$username = $_POST['username'];
$password = $_POST['password'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Proses Login</title>

    <style>

    body{
        font-family:Times New Roman;
    }

    .biru{
        color:blue;
        font-size:30px;
        font-weight:bold;
    }

    .merah{
        color:red;
        font-size:20px;
        font-weight:bold;
    }

    </style>

</head>

<body>

<?php

if($username=="admin" && $password=="admin"){

    echo "<h1>Login berhasil!</h1>";

    echo "<h1>
            Selamat datang,
            <span class='biru'>$username.</span>
          </h1>";

    echo "<a href='index.php'>
            kembali ke halaman login
          </a>";

}
else{

    echo "<h1 class='merah'>
            Username : $username Tidak Terdaftar!
          </h1>";

    echo "<a href='index.php'>
            kembali ke halaman login
          </a>";

}

?>

</body>
</html>