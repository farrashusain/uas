<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>buku tamu</title>
    <style type="text/css">
        body{
            background-color:#9054ad;
    </style>
</head>
<body>
<div align="middle"> <strong><font size="5" face="Courier New, Courier, mono" >Buku Tamu</font></strong></div>

<form name="form1" method="post" action="proses.php" >
    <table width="58%" border="0" align="right" bgcolor="#9054ad">
        <tr>
            <td >Nama Lengkap</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>

        <tr>
            <td>email</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>

        <tr>
            <td >komentar</td>
            <td><textarea name="komentar" id="komentar"></textarea></td>
        </tr>

       <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="submit" value="Kirim"><input type="reset" name="submit2" value="batal"></td>
       </tr> 


    </table>
</form> 

<div align="right"><strong><a href="lihat.php">::Lihat buku tamu::</strong></div>
</body>
</html>
