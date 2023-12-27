<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Biodata</title>
</head>
<body>
    <form action="hasil_biodata.php" method="post">
        <h2>Masukkan Biodata</h2>
        <p>Nama : <input type="text" name="nama" id="nama"></p>
        <p><input type="radio" name="kelamin" value="laki-laki"> Laki-Laki
    <input type="radio" name="kelamin" value="perempuan"> Perempuan</p>
    <p>Program Studi :</p>
    <input type="checkbox" name="si" value="Sistem Informasi"> Sistem Informasi <br>
    <input type="checkbox" name="infor" value="Informatika"> Informatika <br>
    <input type="checkbox" name="ti" value="Teknik Industri"> Teknik Industri <br>
    <p>Semester :</p>
    <select name="semester">
        <option value="Semester 1">Semester 1</option>
        <option value="Semester 2">Semester 2</option>
        <option value="Semester 3">Semester 3</option>
        <option value="Semester 4">Semester 4</option>
        <option value="Semester 5">Semester 5</option>
        <option value="Semester 6">Semester 6</option>
        <option value="Semester 7">Semester 7</option>
        <option value="Semester 8">Semester 8</option>
    </select>
    <p>Pesan </p>
    <textarea name="pesan"></textarea><br>
    <input type="submit" name="kirim" value="Kirim"><br>
    </form>
</body>
</html>