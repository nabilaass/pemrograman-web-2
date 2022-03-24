<?php
$conn_string = "host=	balarama.db.elephantsql.com " . 
  "port=5432 dbname=vaxxxonn " .
  "user=vaxxxonn " . 
  "password=FIS22sGeO8YMeuqnW77SrXXZpbg5e_S9";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi database berhasil tersambung";
} else {
    echo "Koneksi dengan database GAGAL tersambung";
}
?>