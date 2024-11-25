<?php
include_once("wordix.php");



/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* -NombreApellido: Franco Jara -legajo: 4474 -Carrera: Tec. Desarrollo Web -mail: jaracx@hotmail.com -Github: jaracx */
/* -NombreApellido: Facundo Ulloa -legajo: FAI-4713 -Carrera: Tec. Desarrollo Web -mail: facundoulloa1.epet20@gmail.com -Github: FacundoUlloa123 */
/* ****COMPLETAR***** */


/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS"
        /* Agregar 5 palabras más */
    ];

    return ($coleccionPalabras);
}

function cargarPartidas(){
  $coleccionPartidas = [];
  
  $partida1 = [
    "palabraWordix "=> "QUESO", "jugador" => "majo", "intentos"=> 0, "puntaje" => 0];
  $partida2 = [
    "palabraWordix "=> "CASAS", "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
  $partida3 = [
    "palabraWordix "=> "QUESO", "jugador" => "pink2000", "intentos"=> 3, "puntaje" => 14];
  $partida4 = [
    "palabraWordix "=> "HUEVO", "jugador" => "franco", "intentos"=> 3, "puntaje" => 14];
  $partida5 = [
    "palabraWordix "=> "GOTAS", "jugador" => "juan", "intentos"=> 0, "puntaje" => 0];
  $partida6 = [
    "palabraWordix "=> "FUEGO", "jugador" => "facu", "intentos"=> 0, "puntaje" => 0];
  $partida7 = [
    "palabraWordix "=> "YUYOS", "jugador" => "carlos", "intentos"=> 0, "puntaje" => 0];
  $partida8 = [
    "palabraWordix "=> "PIANO", "jugador" => "franklin", "intentos"=> 0, "puntaje" => 0];
  $partida9 = [
    "palabraWordix "=> "PISOS", "jugador" => "tuka", "intentos"=> 0, "puntaje" => 0];
  $partida10 = [
    "palabraWordix "=> "MELON", "jugador" => "tomi", "intentos"=> 0, "puntaje" => 0];
    array_push($coleccionPartidas, $partida1, $partida2, $partida3, $partida4, $partida5, $partida6, $partida7, $partida8, $partida9, $partida10);
    return $coleccionPartidas;
}

function seleccionarOpcion(){
  echo "\n";
  echo "Seleccione una opcion del 1 al 8. \n";
  echo "1) Jugar al wordix con una palabra elegida. \n";
  echo "2) Jugar al wordix con una palabra aleatoria. \n";
  echo "3) Mostrar una partida. \n";
  echo "4) Mostrar la primer partida ganadora. \n";
  echo "5) Mostrar resumen de Jugador. \n";
  echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra. \n";
  echo "7) Agregar una palabra de 5 letras a Wordix. \n";
  echo "8) salir. \n";
  $opcion = solicitarNumeroEntre(1,8);
  return $opcion;
}

/* ****COMPLETAR***** */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

/*
$partida = jugarWordix("MELON", strtolower("Facu"));
print_r($partida);
imprimirResultado($partida);  

*/


do {

    // Menú de opciones
    echo "\n\e[1;37;44m**************************************\e[0m\n";  // Línea con color
    echo "\e[1;37;44m***     MENÚ DE OPCIONES - WORDIX    ***\e[0m\n";
    echo "\e[1;37;44m**************************************\e[0m\n";  // Línea con color
    echo "\n";
    echo "\e[1;33m1)\e[0m Jugar al Wordix con una palabra elegida\n";
    echo "\e[1;33m2)\e[0m Jugar al Wordix con una palabra aleatoria\n";
    echo "\e[1;33m3)\e[0m Mostrar una partida\n";
    echo "\e[1;33m4)\e[0m Mostrar la primer partida ganadora\n";
    echo "\e[1;33m5)\e[0m Mostrar resumen de Jugador\n";
    echo "\e[1;33m6)\e[0m Mostrar listado de partidas ordenadas por jugador y por palabra\n";
    echo "\e[1;33m7)\e[0m Agregar una palabra de 5 letras a Wordix\n";
    echo "\e[1;31m8)\e[0m Salir\n";  // Opción de salir en color rojo
    echo "\n";
    echo "Elija una opción: ";
    
    $opcion = seleccionarOpcion();
    
    switch ($opcion) {
        case 1: 
            //Jugar al Wordix con una palabra elegida 3. 
            /*Para visualizar el menú de opciones (que siempre es el mismo), una función seleccionarOpcion que
            muestre las opciones del menú en la pantalla (ver sección EXPLICACION 1), le solicite al usuario una
            opción válida (si la opción no es válida vuelva a solicitarla en la misma función hasta que la opción sea
            válida), y retorne el número de la opción. La última opción del menú debe ser “Salir”.*/
            do{
              echo "ingresar nombre";
              $nombreUsuario = strtolower(trim(fgets(STDIN)));

              if ($nombreUsuario == ""){
                
              }
            }
            
            

            $partida = jugarWordix($palabraElegida, $nombreUsuario);
            break;
        case 2: 
            //Jugar al Wordix con una palabra aleatoria
            $partida = jugarWordix("MELON", strtolower("Juan"));
            break;
        case 3: 
            //Mostrar una partida
            
            break;
        
        case 4: 
            //Mostrar la primer partida ganadora

            break;
        case 5: 
            //Mostrar resumen de Jugador
            echo "Ingrese el nombre de usuario: ";
            break;
        case 6: 
            //Mostrar listado de partidas ordenadas por jugador y por palabra

            break;
        case 7: 
            //Agregar una palabra de 5 letras a Wordix
            echo "Ingrese la palabra de 5 letras a agregar: ";
            break;
        case 8: 
            //Salir
            echo "¡Gracias por jugar Wordix!\n";
            break;
        default:
            echo "Opción no válida. Intente nuevamente.\n";

        break;
    }
} while ($opcion != 8);

?>
