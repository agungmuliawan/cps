<?php

    function pre(... $array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
            
        }
    function dd(... $array){
        pre($array);
        die();
    }




?>