<?php
try {
    $user = "yavuzyar_yarkinokular";
    $pass = "tffhgd42516";
    $db = new PDO('mysql:host=89.252.180.102;dbname=yavuzyar_ayar;charset=utf8', $user, $pass);
    // echo "Bağlantı başarılı";
} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>