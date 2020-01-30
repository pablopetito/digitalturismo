<?php
    session_start();
    function miAutocarga($nClase)
    {
        require_once 'clases/'.$nClase.'.php';

    }
    
    spl_autoload_register('miAutocarga');