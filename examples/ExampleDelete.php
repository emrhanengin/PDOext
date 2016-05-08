<?php
/*
 * Sınıfımızı dahil ettik ve gerekli veritabanı ayarlarımızı yaptık.
 * Alacağı Değerler::
 * 1. host     ( localhost önerilir )
 * 2. db       ( Veritabanı adı buraya gelecek )
 * 3. name     ( Veritabanı kullanıcı adı buraya gelicek )
 * 4. password ( Veritabanı şifresi varsa buraya gelicek )
 * 5. charset  ( Karakter seti belirlenmezsek utf8 otomatik seçili gelicektir )
*/
include "../src/PDOext.php";
$db = new PDOext("localhost","testdb","testuser","testpassword");

/*
 * Bu sınıfta ise veri sileceğiz.
 * ilk değer tabloAdi olmak zorunda sonra da where eklenecek.
 * üçüncü bir parametre olarak ise limit girebiliriz.
*/
$query = $db->delete("test","testId = 2");