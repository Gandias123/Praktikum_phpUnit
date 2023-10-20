<?php
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
// Menggunakan namespace PHPUnit dengan yang benar
use PHPUnit\Framework\TestCase;

// Mengimpor kelas "wordcount" pada file "wordcount.php"
require_once "Wordcount.php";

// Mendefinisikan kelas "SimpleTest" yang merupakan tes unit dan turunan dari TestCase yang ada di framword
class SimpleTest extends TestCase {
    
    // Membuat metod "testcountwords"
public function testcountWords ()
{

// Membuat inisialisasi objek dari kelas "wordcount"
$WC = new Wordcount();

// Menyiapkan beberapa kalimat untuk di uji coba
$TestSentence = "My name is Gandi"; // 4 Kata  ..

// Memanggil metode "countWords" dari objek/variable $wcc
$Wordcount = $WC->countWords ($TestSentence);

// Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
 // jadi Memeriksa apakah jumlah kata yang akan dihasilkan sama dengan yang diharapkan yaitu 4
$this->assertEquals (4, $Wordcount);

    }
}