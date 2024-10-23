<?php

if(!empty($_POST['elemento']))
{
    function getElemento()
    {
        $elemento = $_POST['elemento'];
        foreach($elementos as $elem)
        {
            switch($elem)
            {
                case 1:
                    echo "Ac: Actinio .<br>";
                    echo "Número Atomico: 89";
                    echo "Masa Atomica (g/mol): 227u";
                    break;
                case 2:
                    echo "Al: Aluminio";
                    echo "Número Atomico: 12+1";
                    break;
                
            }
        }
    }
}
