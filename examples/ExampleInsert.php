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
 * insert ile ilk önce tabloAdi gelicek sonra SET denerek alıcağı değerler girilecektir.
*/
$query = $db->insert("test SET name = 'Emirhan'");