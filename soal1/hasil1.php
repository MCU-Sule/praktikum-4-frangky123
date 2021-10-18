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
    <?php
    $Angkapertama = $_GET["angkapertama"];
    $Angkakedua = $_GET["angkakedua"];
    $Operator = $_GET["operator"];
    ?>
    <body>
    <table align="center" border="2" cellspacing="0" cellpadding="2">
        <tr>
            <th bgcolor="#9ACD32" colspan="3" align="center">Kalkulator</th>
        </tr>
        <tr>
            <td bgcolor="#2E8B57">Angka pertama</td>
            <td width="200"> <?php echo $Angkapertama ?> </td>
        </tr>
        <tr>
            <td bgcolor="#2E8B57">Angka kedua</td>
            <td width="200"> <?php echo $Angkakedua ?></td>
         <tr>   
            <td bgcolor="#2E8B57">Operator</td>
            <td width="200"> <?php echo $Operator ?></td>
        </tr>
        <tr bgcolor="#9ACD32">
            <td colspan="3" align="center"><b> 
                Hasil = <?php 
    $Angkapertama = $_GET["angkapertama"];
    $Angkakedua = $_GET["angkakedua"];
    $Operator = $_GET["operator"]; 
    if ($Operator =="+") {
        echo $Angkapertama+$Angkakedua;
    } 
    else if ($Operator =="-") {
        echo $Angkapertama-$Angkakedua;
    }
    else if ($Operator =="*") {
        echo $Angkapertama*$Angkakedua;
    }
    else if ($Operator == "/") {
        echo $Angkapertama/$Angkakedua;
    }
    ?></b>
</body>
</html>