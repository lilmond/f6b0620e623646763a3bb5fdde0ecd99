<?php

class UserInfo {
    public static function getUserInfo()
    {
        $targetInfo = array("REMOTE_ADDR", "HTTP_X_FORWARDED_FOR", "HTTP_USER_AGENT");
        $userInfo = array();

        foreach ($targetInfo as $infoVar)
        {
            if (isset($_SERVER[$infoVar]))
            {
                $varVal = $_SERVER[$infoVar];
                $userInfo[$infoVar] = $varVal;
            }
        }

        return $userInfo;
    }
}
