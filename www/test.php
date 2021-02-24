<?php

try {
    $conn = new PDO("mysql:host=172.17.0.1:8083;dbname=yii_tests","root","yii_tests");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }
  $sql="SHOW DATABASES";
  foreach ($conn->query($sql) as $row) {
   echo "Database=".$row['Database']."<br>";;
}

phpinfo();
?>