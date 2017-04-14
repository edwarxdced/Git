<?php
    function hello($fname) 
    {
       echo "Hello";
       echo $fname;
       echo "Que que";
   }
    echo "<input type=button name=Release1 onclick=hello(listo); value=Release>";
    echo "<input type='button' onclick='hello();' value='Salir'>";
    echo "Que pasa";

?>