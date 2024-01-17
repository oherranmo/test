<?php

    $count=$_COOKIE['count'];
    if(isset($count)){
            $count++;
    }else{
            $count=0;
    }

    secookie('count',$count);
    echo $count;
