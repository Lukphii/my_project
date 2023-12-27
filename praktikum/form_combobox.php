<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input ComboBox</title>
</head>
<body>
    <p>Binatang apa yang Anda suka?</p>
    <form id="form_combobox" name="form_combobox" action="proses_combobox.php" method="post">
        <select name="favorit">
            <option value="Kucing">Kucing</option>
            <option value="Anjing">Anjing</option>
            <option value="Burung">Burung</option>
            <option value="Sapi">Sapi</option>
            <option value="Kambing">Kambing</option>
        </select>
        <p></p>
        <p><input type="submit" value="tampil" name="button"></p>
    </form>
</body>
</html>