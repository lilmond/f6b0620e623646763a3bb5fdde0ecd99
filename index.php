<?php
    header("Content-Type: application/json");
    require_once("./system.php");
    
    $userInfo = UserInfo::getUserInfo();
    echo json_encode($userInfo);
?>
