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
        "MUJER", "QUESO", "FUEGO", "MANTA", "RASGO",
        "PERRO", "PAPEL", "HUEVO", "TINTO", "RUEDA",
        "VERDE", "MELON", "YUYOS", "PIANO", "GORRA"
        /* Agregar 5 palabras más */
    ];

    return ($coleccionPalabras);
}

/* 
* Obtiene una coleccion de partidas
* @return array
*/
function cargarPartidas(){
  $coleccionPartidas = [];
  
  $partida1 = [
    "palabraWordix"=> "QUESO", "jugador" => "majo", "intentos"=> 6, "puntaje" => 1];
  $partida2 = [
    "palabraWordix"=> "GORRA", "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 4];
  $partida3 = [
    "palabraWordix"=> "RASGO", "jugador" => "pink2000", "intentos"=> 3, "puntaje" => 4];
  $partida4 = [
    "palabraWordix"=> "HUEVO", "jugador" => "franco", "intentos"=> 3, "puntaje" => 4];
  $partida5 = [
    "palabraWordix"=> "PAPEL", "jugador" => "majo", "intentos"=> 6, "puntaje" => 1];
  $partida6 = [
    "palabraWordix"=> "FUEGO", "jugador" => "facu", "intentos"=> 1, "puntaje" => 6];
  $partida7 = [
    "palabraWordix"=> "YUYOS", "jugador" => "carlos", "intentos"=> 2, "puntaje" => 5];
  $partida8 = [
    "palabraWordix"=> "PIANO", "jugador" => "carlos", "intentos"=> 3, "puntaje" => 4];
  $partida9 = [
    "palabraWordix"=> "RUEDA", "jugador" => "tuka", "intentos"=> 5, "puntaje" => 2];
  $partida10 = [
    "palabraWordix"=> "MELON", "jugador" => "tomi", "intentos"=> 4, "puntaje" => 3];
    array_push($coleccionPartidas, $partida1, $partida2, $partida3, $partida4, $partida5, $partida6, $partida7, $partida8, $partida9, $partida10);
    return $coleccionPartidas;
}
/*
* Muestra en pantalla el menu de opciones al usuario
* @param Int $opcion
*/
function seleccionarOpcion(){
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
    echo "Elija una opción: \n";
    $opcion = trim(fgets(STDIN));
  return $opcion;
}

/*
* Solicita un número al usuario y valida que esté dentro de un rango
* @param string $usuario
* @param string $palabra
* @param array $coleccionPartidas
* @return boolean
*/
function palabraUtilizada($usuario, $palabra, $coleccionPartidas){
  foreach ($coleccionPartidas as $partida){
    if ($partida["jugador"] == $usuario && $partida["palabraWordix"] == $palabra){
      return true;
    }
  }
  return false;
}
/*
* muestra en pantalla los datos de una partida
* @param int $numeroPartida
*/
function mostrarPartida($numeroPartida) {
  // Cargar las partidas
  $partidas = cargarPartidas();

  // Validar número
  if ($numeroPartida < 1 || $numeroPartida > 10) {
      echo "Número de partida inválido.\n";
      return;
  }

  $partida = $partidas[$numeroPartida - 1];

  // Información de la partida
  echo "Partida WORDIX $numeroPartida:\n";
  echo "Palabra: " . $partida["palabraWordix"] . "\n";
  echo "Jugador: " . $partida["jugador"] . "\n";
  echo "Puntaje: " . $partida["puntaje"] . " puntos\n";

  if ($partida["intentos"] == 0) {
      echo "Intento: No adivinó la palabra\n";
  } else {
      echo "Intento: Adivinó la palabra en " . $partida["intentos"] . " intentos\n";
  }
}
// Una función que dada una colección de pardas y el nombre de un jugador, retorne el índice de la primer partida ganada por dicho jugador. Si el jugador ganó ninguna parda, la función debe retornar el valor -1. (debe ulizar las instrucciones vistas en la materia, no ulizar funciones predenidas de php

/*
* Busca la primera partida ganada por un jugador
* @param array $coleccionPartidas
* @param string $nombreJugador
* @return int
*/
function buscarPrimeraPartidaGanada($coleccionPartidas, $nombreJugador){
  $indice = 0;
  $encontrado = false;
  while ($indice < count($coleccionPartidas) && !$encontrado){
    if ($coleccionPartidas[$indice]["jugador"] == $nombreJugador && $coleccionPartidas[$indice]["puntaje"] == 6){
      $encontrado = true;
    } else {
      $indice++;
    }
  }
  if ($encontrado){
    return $indice;

  } else {
    return -1;
  }
}
 /*
 * dado un usuario muestra sus estadisticas
 * @param string $nombreJugador
 * @param array $coleccionPartidas
 */
function mostrarEstadisticas($nombreJugador, $coleccionPartidas) {
  $encontrado = false;

  echo "Estadísticas del jugador: $nombreJugador\n";
  
  foreach ($coleccionPartidas as $partida) {
      if ($partida['jugador'] == $nombreJugador) {
          $encontrado = true;
          // Mostramos las estadísticas de esa partida
          echo "Palabra: " . $partida['palabraWordix'] . "\n";
          echo "Intentos: " . $partida['intentos'] . "\n";
          echo "Puntaje: " . $partida['puntaje'] . " puntos\n\n";
      }
  }
  
  if (!$encontrado) {
      echo "No se encontraron partidas para el jugador $nombreJugador.\n";
  }
}

/*
*Función de comparación para uasort(), que ordena por jugador y por palabra
*@param array $a
*@param array $b
*/
function compararPartidas($a, $b) {
  // Primero, ordenamos por el nombre del jugador
  if ($a['jugador'] === $b['jugador']) {
      // Si los jugadores son iguales, ordenamos por la palabra
      return strcmp($a['palabraWordix'], $b['palabraWordix']);
  }
  return strcmp($a['jugador'], $b['jugador']);
}

// Ordenamos las partidas utilizando uasort() con la función de comparación
//uasort($coleccionPartidas, 'compararPartidas');

function agregarPalabra($coleccionPalabras, $nuevaPalabra) {
  // Verificar que la palabra tiene exactamente 5 letras
  if (strlen($nuevaPalabra) == 5) {
      // Convertir la palabra a mayúsculas
      $nuevaPalabra = strtoupper($nuevaPalabra);

      // Agregar la palabra a la colección
      $coleccionPalabras[] = $nuevaPalabra;
      echo "Palabra '$nuevaPalabra' agregada exitosamente.\n";
  } else {
      // Si la palabra no tiene 5 letras
      echo "La palabra debe tener exactamente 5 letras.\n";
  }
}

// Inicializamos la colección de palabras
/* ****COMPLETAR***** */

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:

//Inicialización de variables:

$arrayPalabras = cargarColeccionPalabras();
$coleccionPartidas = cargarPartidas();
$minimoPalabras = 1;
$maximoPalabras = count($arrayPalabras);
$coleccionPalabras = cargarColeccionPalabras();



//Proceso:

do {
    $opcion = seleccionarOpcion();
    
    switch ($opcion) {
        case 1: 
            //Jugar al Wordix con una palabra elegida 3. 
            /*Para visualizar el menú de opciones (que siempre es el mismo), una función seleccionarOpcion que
            muestre las opciones del menú en la pantalla (ver sección EXPLICACION 1), le solicite al usuario una
            opción válida (si la opción no es válida vuelva a solicitarla en la misma función hasta que la opción sea
            válida), y retorne el número de la opción. La última opción del menú debe ser “Salir”.
            1) Jugar al wordix con una palabra elegida: se inicia la partida de wordix solicitando el nombre del
            jugador y un número de palabra para jugar. Si el número de palabra ya fue utilizada por el jugador, el
            programa debe indicar que debe elegir otro número de palabra.
            Luego de finalizar la partida, los datos de la partida deben ser guardados en una estructura de datos
            de partidas (ver la sección EXPLICACION 2, de Estructura de datos del presente enunciado)
            */
            do {
              echo "Ingrese su nombre: ";
              $nombreUsuario = trim(fgets(STDIN));
            
              // Verificar que el nombre no esté vacío
              if ($nombreUsuario == "") {
                  echo "El nombre de usuario no puede estar vacío. \n";
                  $nombreValido = false; // Nombre no válido
              } else {
                  $nombreValido = true; // Nombre válido
              }
            
            } while (!$nombreValido); // sigue hasta que el nombre sea válido
            
            do {
              $numeroPalabra = solicitarNumeroEntre(1, count($coleccionPalabras));
            
              // Verificar si el número de palabra ya ha sido utilizado
              $palabraElegida = $arrayPalabras[$numeroPalabra - 1];
              $palabraUtilizada = palabraUtilizada($nombreUsuario, $palabraElegida, $coleccionPartidas);
            
              if ($palabraUtilizada) {
                echo $palabraElegida . " ya fue utilizada, elija otra. \n";
              }
            } while ($palabraUtilizada); //
            
            $partida = jugarWordix($palabraElegida, $nombreUsuario);
            $coleccionPartidas[] = $partida;

            
            break;
        case 2: 
            /*Jugar al wordix con una palabra aleatoria: se inicia la parda de wordix solicitando el nombre del
            jugador. El programa elegirá una palabra aleatoria de las disponibles para jugar, el programa debe
            asegurarse que la palabra no haya sido jugada por el Jugador.
            Luego de finalizar la parda, los datos de la parda deben ser guardados en una estructura de datos
            de pardas (ver la sección EXPLICACION 2, de Estructura de datos del presente enunciado)*/

            do {
              echo "Ingrese su nombre: ";
              $nombreUsuario = trim(fgets(STDIN));
            
              // Verificar que el nombre no esté vacío
              if ($nombreUsuario == "") {
                  echo "El nombre de usuario no puede estar vacío. \n";
                  $nombreValido = false; // Nombre no válido
              } else {
                  $nombreValido = true; // Nombre válido
              }
            
            } while (!$nombreValido); // sigue hasta que el nombre sea válido

            do {
              $numeroAleatorio = rand(1, count($coleccionPalabras));

              // Seleccionar la palabra correspondiente en el array
              $palabraElegida = $arrayPalabras[$numeroAleatorio - 1];
              $palabraUtilizada = palabraUtilizada($nombreUsuario, $palabraElegida, $coleccionPartidas);
            
              if ($palabraUtilizada) {
                echo $palabraElegida . " ya fue utilizada, elija otra. \n";
              }
            } while ($palabraUtilizada); // El bucle sigue hasta que el número de palabra no haya sido utilizado
            
            $partida = jugarWordix($palabraElegida, $nombreUsuario);
            $coleccionPartidas[] = $partida;
            break;
        case 3: 
            /* Mostrar una parda: Se le solicita al usuario un número de parda y se muestra en pantalla*/
            $num = count($coleccionPalabras);
            echo "Ingrese el número de la partida (1 - " . $num .  " ): ";
            $numeroPartida = intval(trim(fgets(STDIN))); // entrada de usuario - (intval: se asegura que el numero ingresado sea un valor entero)
            mostrarPartida($numeroPartida);
            
            break;
        
        case 4: 
            //Mostrar la primer partida ganadora de un jugador.
            echo "Ingrese el nombre de usuario: ";
            $buscarJugador = trim(fgets(STDIN));
            $indice = buscarPrimeraPartidaGanada($coleccionPartidas, $buscarJugador);
            if ($indice != -1){
              mostrarPartida($indice + 1);
            } else {
              echo "El jugador no ha ganado ninguna partida.\n";
            }


            break;
        case 5: 
            //Mostrar resumen de Jugador
            echo "Ingrese el nombre del jugador: ";
            $nombreJugador = trim(fgets(STDIN));

            // Mostrar las estadísticas del jugador
            mostrarEstadisticas($nombreJugador, $coleccionPartidas);
            break;
        case 6: 
            //Mostrar listado de partidas ordenadas por jugador y por palabra
            uasort($coleccionPartidas, 'compararPartidas');
            echo "Listado de Partidas ordenadas por Jugador y por Palabra:\n";
            print_r($coleccionPartidas);

            break;
        case 7: 
            //Agregar una palabra de 5 letras a Wordix
            echo "Ingrese una palabra de 5 letras: ";
            $nuevaPalabra = trim(fgets(STDIN));  // Solicitar al usuario la palabra
            agregarPalabra($coleccionPalabras, $nuevaPalabra);
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
