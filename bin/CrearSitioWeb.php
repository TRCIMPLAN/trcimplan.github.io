#!/usr/bin/env php
<?php
/*
 * SMIbeta - Crear Sitio Web
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Soy
$soy = '[Crear Sitio Web]';

// Valores de salida
$EXITO=0;
$E_FATAL=99;

// Cambiarse al directorio por debajo de donde se encuentra este programa
// chdir(realpath(dirname(__FILE__))."/..");

// Cargar funciones, éste conteniene el autocargador de clases
require_once('lib/Base/Funciones.php');

/**
 * Páginas Estáticas
 */
// Cargar el menu principal
$navegacion    = new \Base\Navegacion();
// Cargar el mapa inferior
$mapa_inferior = new \Base\MapaInferior();
// Cargar la plantilla completa
$plantilla                = new \Base\Plantilla();
$plantilla->navegacion    = $navegacion;
$plantilla->mapa_inferior = $mapa_inferior;
// Cargar el impresor
$impresor            = new \Base\Imprenta();
$impresor->plantilla = $plantilla;
// Imprimir
try {
    $impresor->agregar_directorio_publicaciones('PaginasEstaticas');
    echo $impresor->imprimir()."\n";
} catch (\Exception $e) {
    echo implode("\n", $impresor->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}
unset($plantilla);
unset($impresor);

/**
 * Eventos
 */
// Cargar la plantilla completa
$plantilla                = new \Base\Plantilla();
$plantilla->navegacion    = $navegacion;
$plantilla->mapa_inferior = $mapa_inferior;
// Cargar el impresor
$impresor            = new \Base\Imprenta();
$impresor->plantilla = $plantilla;
// Imprimir
try {
    $eventos = $impresor->agregar_directorio_publicaciones('Eventos');
    echo $impresor->imprimir()."\n";
} catch (\Exception $e) {
    echo implode("\n", $impresor->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}
unset($plantilla);
unset($impresor);
// Cargar plantilla inicial de eventos
$plantilla                = new \Eventos\PlantillaInicial();
$plantilla->navegacion    = $navegacion;
$plantilla->mapa_inferior = $mapa_inferior;
$plantilla->publicaciones = $eventos;
// Cargar el impresor
$impresor            = new \Base\Imprenta();
$impresor->plantilla = $plantilla;
// Imprimir
try {
    echo $impresor->imprimir()."\n";
} catch (\Exception $e) {
    echo implode("\n", $impresor->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}
unset($plantilla);
unset($impresor);

/**
 * Página Inicial
 */
unset($navegacion);
unset($mapa_inferior);
// Cargar el menu principal
$navegacion          = new \Base\Navegacion();
$navegacion->en_raiz = true;
// Cargar el mapa inferior
$mapa_inferior          = new \Base\MapaInferior();
$mapa_inferior->en_raiz = true;
// Cargar la plantilla para la Página Inicial
$plantilla_inicial                = new \Inicial\PlantillaInicial();
$plantilla_inicial->navegacion    = $navegacion;
$plantilla_inicial->mapa_inferior = $mapa_inferior;
// Cargar el impresor
$impresor            = new \Base\Imprenta();
$impresor->plantilla = $plantilla_inicial;
// Imprimir
try {
    echo $impresor->imprimir()."\n";
} catch (\Exception $e) {
    echo implode("\n", $impresor->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}

// Mensaje de término
echo "$soy Programa terminado.\n";
exit($EXITO);

?>
