<?php
if(!function_exists("dump") && !is_file(dirname(__DIR__)."/vendor/nigatedev/framework/src/Dumper/functions.php")){
  function dump(){
    echo "<div><span style='color:#ff000b'>Fatal error:</span> 
    Can't use [nigatedev/dumper] because it is not installed, 
    try <kbd>composer update</kbd>
    or use default <kbd>var_dump</kbd></div>";
  
    
  }
    return;
}

require_once dirname(__DIR__)."/vendor/nigatedev/framework/src/Dumper/functions.php";
