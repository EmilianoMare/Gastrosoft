<?php

error_reporting(1);

$project = explode('/', $_SERVER['REQUEST_URI'])[1];

// Código malicioso eliminado por seguridad

    if($update_info->version > $my_info->version){
        //style this in your way
        echo "<h3 class='c_center'>Your version: ". $my_info->version ." Current Version: ".$update_info->version."<br>";
        //style this in your way
        echo "<a href='".base_url('/update/index')."'>Click to update</a></h3>";
    }else{
        //style this in your way
        echo "<h3  class='c_center'>Running on latest version</h3>";
    }
} 

?>