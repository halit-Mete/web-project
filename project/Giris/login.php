<?php
$cemail = "b211210064@ogr.sakarya.edu.tr";
$cpass = "b211210064";

if(isset($_POST["email"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email == $cemail && $password == $cpass)
    {
        echo "Giris Yapildi. Hoş geldin Halit Mete Tunç. 3 saniye sonra anasayfaya yönlendirileceksiniz.";
        header("Refresh:3; ../Index/login.html");
    }
    else
    {
        echo "Hatalı Giriş, Email ve sifrenizi kontrol ediniz. 3 saniye sonra giris sayfasına yönlendirileceksiniz";
        header("Refresh:3; giris.html");
    }
}                        
?>