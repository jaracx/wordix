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

/* ****COMPLETAR***** */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

//$partida = jugarWordix("MELON", strtolower("Facu"));
//print_r($partida);
//imprimirResultado($partida);




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

    $opcion = trim(fgets(STDIN));

    
    switch ($opcion) {
        case 1: 
            //Jugar al Wordix con una palabra elegida

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

            break;
        case 6: 
            //Mostrar listado de partidas ordenadas por jugador y por palabra

            break;
        case 7: 
            //Agregar una palabra de 5 letras a Wordix

            break;
        case 8: 
            //Salir

            break;
        default:
            echo "Opción no válida. Intente nuevamente.\n";

        break;
    }
} while ($opcion != 8);

?>
