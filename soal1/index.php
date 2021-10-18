<!DOCTYPE html>
<html lang="en">
    <meta name="author" content="Frangky Hernandez 2172036">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form action="hasil.php" name="Data Diri" method="POST">
    <table align="center" border="0" cellspacing="10">
    <caption><font size="3">
        <b>Form Input</b>
    </font></caption>
<tr>
    <td>Nama</td>
    <td>:<td>
    <td colspan="2"><Input type="text" name="nama" id="nama" size="30"></td>
</tr>
<tr>
    <td>Email</td>
    <td>:<td>
    <td colspan="2"><Input type="text" name="email" id="email" size="30"></td>
</tr>
<tr>
    <td>Phone number</td>
    <td>:<td>
    <td colspan="2"><Input type="text" name="hp" id="hp" size="30"></td>
</tr>
<tr>
    <td>Hobby</td>
    <td>:<td>
    <td colspan="2"><Input type="text" name="hobby" id="hobby" size="30"></td>
</tr>
<tr>
    <td>Description</td>
    <td>:<td>
    <td colspan="2" align="left" valign="center"> <textarea name="desc" id="desc" rows="10" cols="32"></textarea></td>
</tr>
<tr>
    <td colspan="4" align="center">
    <input type="submit" value="submit">
    <input type="reset" value="reset">
</td>
</tr>
</table>
</body>
</html>