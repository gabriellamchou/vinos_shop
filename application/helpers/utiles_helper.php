<?php
    // estas son funciones que podremos cargar en el controllador y utilizar en la vista también
    function debug ($var)
    {
        $debug = debug_backtrace();
        echo "<pre>";
        echo $debug[0]['file']." ".$debug[0]['line']."<br><br>";
        print_r($var);
        echo "</pre>";
        echo "<br>";
    }
?>