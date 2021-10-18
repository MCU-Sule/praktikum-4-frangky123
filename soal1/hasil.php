<!DOCTYPE html>
<html lang="en">
    <meta name="author" content="Frangky Hernandez 2172036">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
<hr>
    <h1>Form input berhasil diterima</h1>
    <?php
    echo "<p>Nama saya adalah $_POST[nama].</p>";
    echo "<p>Email saya yaitu $_POST[email].</p>";
    echo "<p>No hp saya adalah $_POST[hp].</p>";
    echo "<p>Hobby saya yaitu $_POST[hobby].</p>";
    echo "<p>Deskripsi diri saya adalah $_POST[desc].</p>";
    ?>
    <hr>
    </body>
</html>