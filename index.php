<!DOCTYPE html>
<html>

<head>
    <title>Actividad 4 - Taller Uso de Formularios para transferencia</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <!-- CDN BOOTSTRAP 4.0.0
         Mediante las clases de bootstrap aplicamos los estilos css
          -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- COMENTARIO CON LOS DATOS DEL AUTOR 
            Autor: Enderson Marín
            Documento: PEP 811117003091987
            Mail: marinenderson1@gmail.com
            Teléfono: +57 314 789 20 88
        --> 
</head>
    
<body>

    <div class="container text-center">
                
                <img src="logo-sena.jpg" alt="">
                <h1><b>Curso Desarrollo web con PHP</b></h1>
                <h3><b>ACTIVIDAD #4 Uso de Formularios para Transferencia</b></h3>
                <hr>


<?php

//Se requieren las funciones para imprimir el escenario y para enviar las acciones del usuario
require("sala.php");
require("accion.php");
//Se ejecuta el if cuando el usuario envie la informacion del formulario
if(isset($_REQUEST["Enviar"])){
                //Se captura la información enviada del formulario
                $fila = $_POST['fila'];
                $puesto= $_POST['puesto'];
                $accion= $_POST['accion'];
                $StringEscenario=$_POST['lista'];
                //El String generado en el input oculto se convierte en un Array
                $count=0;
                for($i=0;$i<5;$i++){//Fila
                    for($j=0;$j<5;$j++){//Puesto
                        $count=5*$i+$j;
                        //Cada captura cada elemento del Array extrayendo dicho elemento del String
/*La función substr — Devuelve parte de una cadena
puede recibir 3 parámetros:
substr(string $string, int $start, int $length = ?): string

***string***
La cadena de entrada. Debe ser de almenos de un caracter.

***start***
Si start no es negativo, la cadena devuelta comenzará en el start de la posición del string empezando desde cero. Por ejemplo, en la cadena 'abcdef', el carácter en la posición 0 es 'a', el carácter en la posición 2 es 'c', y así sucesivamente.

Si start es negativo, la cadena devuelta empezará en start contando desde el final de string.

Si la longitud del string es menor que start, la función devolverá false.

***length***
Si se especifica el length y es positivo, la cadena devuelta contendrá como máximo de caracteres de la cantidad dada por length que comienza en start (dependiedo de la longitud del string).

Si se especifica length es negativo, entonces ese número de caracteres se omiten al final del string (después de la posición inicial se ha calculado a start es negativo). Si start indica la posición de su truncamiento o más allá, se devolverá false.

Si se omite el length, la subcadena empezará por start hasta el final de la cadena donde será devuelta.

Si se especifica length y es 0, false o null devolverá una cadena vacía.

link documentación: https://www.php.net/manual/es/function.substr.php*/

                        $lista[$i][$j]=substr($StringEscenario,$count,1);
 
                    }
                    $count=0;
                }
        //Se devuelve el Array con la información modificada por el usuario
        $lista=Accion($fila,$puesto,$accion,$lista);
        //Se ejecuta la funcion para mostrar el Escenario, dado el Array modificado
        Escenario($lista);
}
//Se ejecuta el else if cuando el usario resetea la informacion del formulario
else if(isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])){
    $lista=array(array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"));
    Escenario($lista);
}
?>

    <table style="margin:auto;" border="1">
        <form method="POST">

                    <!-- Se separa el array $lista en un String y se oculta-->
                    <input type="hidden" name="lista" value="<?php foreach ($lista as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>"  />
                    <!-- Se crean los inputs que van a capturar la información y las acciones con las clases de bootstrap para estilos CSS-->
                    <br>
                    <tr>
                        <td style='background-color:yellow'><strong>Fila:</strong></td>
                        <td>
                            <input type="number" name="fila" size="4" required>
                        </td>
                    </tr>
                    <tr>
                        <td style='background-color:pink'><strong>Puesto:</strong></td>
                        <td>
                            <input type="number" name="puesto" size="4" required>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Reservar:</strong></td>
                        <td>
                            <input type="radio" name="accion" value="R" />
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Comprar:</strong></td>
                        <td>
                            <input type="radio" name="accion" value="V" />
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Liberar:</strong></td>
                        <td>
                            <input type="radio" name="accion" value="L" checked="checked" />
                        </td>
                    </tr>
                    <tr>
                    <!-- botones -->
                        <td>
                            <input type="submit" value="Enviar" name="Enviar" class="btn-success btn-block"/>
                        </td>
                        <td>
                            <input type="submit" value="Reset" name="Reset" class="btn-danger btn-block" />
                        </td>
                    </tr>
                </div>    
            </form>
        </table>
    </div>
</body>
