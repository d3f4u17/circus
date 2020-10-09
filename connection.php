<?php 
  
  $server="localhost"; 
  $user="root"; 
  $pass="root"; 
  $db="tickets"; 
    
  // connect to mysql 
    
  mysqli_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql."); 
    
  // select the db 
    
  mysqli_connect('localhost', 'root', 'root', 'tickets') or die("Sorry, can't select the database."); 

?>