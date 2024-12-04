<?php

// setcookie(name, value, expire, path, domain, secure, httponly); ->  format
setcookie("fruit" , "apple", time() + (3600));

if(isset($_COOKIE['fruit'])){
    echo "current cookie is : " . $_COOKIE['fruit'];
}
else{
    echo "No cookie set";
}
?>