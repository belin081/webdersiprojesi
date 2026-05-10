<?php

$email = $_POST['email'];
$password = $_POST['password'];

// öğrenci numarasını mailden ayır
$ogr_no = explode("@", $email)[0];

$dogru_email = $ogr_no . "@sakarya.edu.tr";
$dogru_sifre = $ogr_no;

if($email == $dogru_email && $password == $dogru_sifre){

    echo "<h2>Hoşgeldiniz " . $ogr_no . "</h2>";

}else{
    echo "<h3>Hatalı giriş!</h3>";
    header("refresh:2; url=login.html");
}

?>