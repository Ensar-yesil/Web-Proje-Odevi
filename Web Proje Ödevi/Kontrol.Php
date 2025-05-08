<?php
$dogruSifre ="b241210101";
$dogruMail = "b241210101@gmail.com";

$girilenSifre = $_POST['sifre'] ?? '';
$girilenMail = $_POST['mail'] ?? '';

if($girilenSifre === $dogruSifre  && $girilenMail === $dogruMail)
{
header("Location: Karşılama.html");
exit();
}
else{
    echo "Hatalı Şifre.<a href ='login.html'> Tekrar denyin</a>";
}



?>

