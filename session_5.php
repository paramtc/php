<?php

 session_start();
  

 $_SESSION['logged_in_user_id'] = '1';
 $_SESSION['logged_in_user_name'] = 'param singh';
 echo "<br>";

 echo $_SESSION['logged_in_user_id'];
 echo $_SESSION['logged_in_user_name'];
 ?>
