<?php
$ad = $_POST["ad"];
$email = $_POST["email"];
$mesaj = $_POST["mesaj"];

mail(
  "site@ornek.com",
  "Yeni Form Mesajı",
  "Ad: $ad\nEmail: $email\nMesaj: $mesaj"
);
?>