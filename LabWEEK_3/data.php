<?php

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "Null username/password";
    }else if($username == $password) {
        echo "Valid User";
    }else{
        echo "invalid user";
    }

?>