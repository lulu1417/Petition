<?php

class Check
{

    function __construct($header)
    {
        if(strpos($header, 'danke')){
            return "註冊成功！請至您的信箱收取驗證信。";
        }else{
            return "此信箱已被使用！";
        }
    }


}