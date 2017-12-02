<?php

class tes extends PHPUnit_Framework_TestCase
{
        public function testFile()
        {
                ob_start();
                include 'file.php';
                $content = ob_get_contents();
                ob_end_clean();
                $this->assertEquals('<a href="http://localhost/ayokerja/pelamar/php/proses_login_pelamar.php">Klik link ini</a>', $content);
        }
}

?>