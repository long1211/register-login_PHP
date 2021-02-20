<?php     
    session_start();
    session_destroy();
      
    header("Location: http://localhost/lab_2/index.php")
;?>