<?php

/*     <!-- COMENTARIO CON LOS DATOS DEL AUTOR 
            Autor: Enderson Marín
            Documento: PEP 811117003091987
            Mail: marinenderson1@gmail.com
            Teléfono: +57 314 789 20 88
        --> 
 */

function Escenario($lista){
    //Se crea la tabla y sus encabezados
echo "<table class='table table-bordered table-condensed table-hover' style='margin:auto;'>";
            echo "<tr>";
            echo "<th colspan='6' style='background-color:#A9D0F5'><h4><strong>RESERVA DE SILLAS PARA SALA DE TEATRO</strong></h4></th>";
            echo "<tr>";
            echo "<th></th>
                <th style='background-color:pink'>1</th>
                <th style='background-color:pink'>2</th>
                <th style='background-color:pink'>3</th>
                <th style='background-color:pink'>4</th> 
                <th style='background-color:pink'>5</th>
                </tr>";
    
$i=1;
// Imprimimos el contenido de la tabla
foreach ($lista as $fila) {
       echo "<tr>";
       echo "<th style='background-color:yellow'>";
       echo $i;
       echo "</th>";
    foreach ($fila as $silla) {
        echo "<td>";
        echo "<strong><h2>$silla</h2></strong>";
        echo "</td>";
    }
    echo "</tr>";
    $i++;
    }
echo "</table>";
}
?>
