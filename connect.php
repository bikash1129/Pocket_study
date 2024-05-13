
<?php

   $db_name = 'mysql:host= sql113.infinityfree.com;dbname=if0_36491365_course_db';
   $user_name = 'if0_36491365';
   $user_password = 'X1mgIVHIOlP6rj';
   $conn = new PDO($db_name, $user_name, $user_password);

   function unique_id() {
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen($str) - 1;
      for ($i = 0; $i < 20; $i++) {
          $n = mt_rand(0, $length);
          $rand[] = $str[$n];
      }
      return implode($rand);
   }

?>

