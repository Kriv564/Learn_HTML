<!DOCTYPE html>
<html>
<head>
<title>Tambah Data</title>

<style>

body{
    font-family:Arial;
}

#box{
    width:400px;
    margin:30px auto;
    border:1px solid #ccc;
    padding:20px;
}

input[type=text]{
    width:100%;
    padding:8px;
}

.btn{
    padding:5px 10px;
    color:white;
    border:none;
}

.simpan{
    background:green;
}

.kembali{
    background:dodgerblue;
    text-decoration:none;
    padding:5px 10px;
}

</style>

</head>

<body>

<div id="box">

<h2 align="center">Tambah Data Siswa</h2>

<form action="proses_tambah.php" method="post">

Nama:
<br>
<input type="text" name="nama">

<br><br>

Kelas:
<br>
<input type="text" name="kelas">

<br><br>

<input type="submit"
       value="Simpan"
       class="btn simpan">

<br><br>

<a href="index.php" class="kembali">
Kembali
</a>

</form>

</div>

</body>
</html>