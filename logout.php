<?php
  session_start();
  unset($_SESSION['userid']);
  unset($_SESSION['username']);
  unset($_SESSION['useradmin']);
  echo("
       <script>
          location.href = 'index.php';
         </script>
       ");
?>
