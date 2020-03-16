<?php
    class manusia{
        var $nama;
        var $godeq;

        function __construct()
        {
            echo 'ini construct ya <br>';
        }

        function tampilan_nama(){
            return 'godeq,godeq,godeq';
        }
        function tampilan_godeq(){
            return 'qweasdqwd';
        }
        function __destruct()
        {
           echo 'ini destruct ya <br>'; 
        }
    
    }
    $manusia = new manusia;

    echo $manusia->tampilan_nama();
