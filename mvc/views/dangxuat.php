<?php 
  
    unset($_SESSION['user']);
    setcookie('credentials', null, time()-3600);
    //$user=[];
    
    header ("Location: Trangchu");
?>