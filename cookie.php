<?php
    //cookies are stored on client side(Browser) less secure
    //can be manipulated by user
    //max storage 4KB
    setcookie("name","paras",time()+(86400)); //seconds
    if(isset($_COOKIE["name"])){
        echo "Cookie is " . $_COOKIE["name"];
    }else{
        echo "No cookie set";
    }
?>