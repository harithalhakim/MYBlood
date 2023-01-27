<?php

//mysqli_connect(server,default username(root), default password(EMPTY), database);
$con= mysqli_connect('localhost', 'root', '', 'myblood');
  if(!$con){
    die("Database connection failed");
  }

 ?>
