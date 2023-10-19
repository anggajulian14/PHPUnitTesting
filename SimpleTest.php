<?php
use PHPUnit\Framework\TestCase;


// Kelas yang akan diuji
require_once "WordCount.php";

class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        // Membuat objek dari kelas WordCount
        $Wc = new WordCount();

        // Kalimat uji dengan 4 kata
        $TestSentence = "My name is Rahmat"; // 4 Kata
        $WordCount = $Wc->countWords($TestSentence);

        // Memastikan hasil perhitungan kata adalah 4
        $this->assertEquals(4 , $WordCount);
    }
}

?>