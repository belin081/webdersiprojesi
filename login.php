<?php
// Formdan gelen verileri al
// isset kullanarak hata almayı engelleyelim
if (isset($_POST['email']) && isset($_POST['password'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Öğrenci numarasını mailden ayır (Örn: b211210000)
    $email_parts = explode("@", $email);
    $ogr_no = $email_parts[0];

    // Sakarya Üniversitesi kuralına göre doğru mail ve şifre belirle
    $dogru_email = $ogr_no . "@sakarya.edu.tr";
    
    $dogru_sifre = $ogr_no; 

    if($email == $dogru_email && $password == $dogru_sifre){
        // Başarılı giriş
        echo "<div style='text-align:center; margin-top:50px; font-family:sans-serif;'>";
        echo "<h2>Hoşgeldiniz " . htmlspecialchars($ogr_no) . "</h2>";
        echo "<p>Giriş başarılı, yönlendiriliyorsunuz...</p>";
        echo "</div>";
        header("refresh:3; url=index.html"); // Başarılıysa ana sayfaya git
    } else {
        // Hatalı giriş
        echo "<div style='text-align:center; margin-top:50px; font-family:sans-serif; color:red;'>";
        echo "<h3>Hatalı Giriş!</h3>";
        echo "<p>Kullanıcı adı veya şifre yanlış. Tekrar deneniyor...</p>";
        echo "</div>";
        header("refresh:2; url=login.html");
    }
} else {
    // Form doldurulmadan sayfaya erişilirse
    header("Location: login.html");
}
?>