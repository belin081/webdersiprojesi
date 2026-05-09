<?php

$email = $_POST['email'];
$password = $_POST['password'];

// doğru bilgiler (kendi numaranla değiştir)
$dogru_email = "b2412100001@sakarya.edu.tr";
$dogru_sifre = "b2412100001";

if($email == $dogru_email && $password == $dogru_sifre){

    echo "<h2>Hoşgeldiniz b2412100001</h2>";
    echo "<a href='index.html'>Ana Sayfaya Git</a>";

}else{
    echo "<h3>Hatalı giriş!</h3>";
    header("refresh:2; url=login.html");
}

?>