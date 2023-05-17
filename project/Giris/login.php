<?php
$cemail = "b211210064@ogr.sakarya.edu.tr";
$cpass = "b211210064";

if(isset($_POST["email"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email == $cemail && $password == $cpass)
    {
        echo "Giris Yapildi. 3 saniye sonra anasayfaya yönlendirileceksiniz.";
        header("Refresh:3; index.html");
    }
    else
    {
        echo "Hata, Email ve sifrenizi kontrol ediniz. 3 saniye sonra giris sayfasına yönlendirileceksiniz";
        header("Refresh:3; giris.html");
    }
}                        
?>