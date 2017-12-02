<?php

// connecting, selecting database
// anda harus sesuaikan dbnam, user dan password sesuai dengan setting pada database server anda

$conn_string = "host=localhost port=5432 dbname=ayokerja user=postgres password=b4r4th4l1m";

$connection = pg_connect($conn_string);

?>