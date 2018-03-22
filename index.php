<?php

    require 'sys/DB.php';
    define('CONF',__DIR__.'/Config.json');
      
    use App\Sys\DB;
    //connection gdb
    
    $name= "Paco";
    $gdb=DB::getInstance();
    
    $query= "INSERT INTO user VALUES (5, 1, :username, :rol, :password)";
    
    
    $sentencia = $gdb->query($query);
    
    $gdb->bind(':username', 'name');
    $gdb->bind(':rol', 'rol');
    $gdb->bind(':password', 'pass');
    
    $gdb->execute();
    $gdb->resultSet();
    
    $gdb->rowCount();
    $gdb->resultSet();
    $gdb->single();
    
    
   