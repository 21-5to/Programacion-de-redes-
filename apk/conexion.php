<?php

$conn = new mysqli("localhost", "root", "", "android_user");

if ($db->connect_error) die("ERROR");
else {
  echo "Conexión creada";
}
return $conn;
