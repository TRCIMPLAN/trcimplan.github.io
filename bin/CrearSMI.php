#!/usr/bin/env php
<?php
/*
 * SMIbeta - Crear Sistema Metropolitano de Indicadores
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
$soy = '[Crear SMI]';

// Valores de salida
$EXITO=0;
$E_FATAL=99;

// Cambiarse al directorio por debajo de donde se encuentra este programa
// chdir(realpath(dirname(__FILE__))."/..");

// Cargar funciones, éste conteniene el autocargador de clases
require_once('lib/Base/Funciones.php');

// Cargar el menu principal
$menu_principal = new \Base\MenuPrincipal();
// Cargar el menu izquierdo
$menu_izquierdo = new \Base\MenuIzquierdo();
// Cargar el mapa inferior
$mapa_inferior  = new \Base\MapaInferior();

/**
 * SMI Indicadores
 */
// Cargar la plantilla, copiar los menús
$plantilla                 = new \Base\PlantillaMenuIzquierdo();
$plantilla->menu_principal = $menu_principal;
$plantilla->menu_izquierdo = $menu_izquierdo;
$plantilla->mapa_inferior  = $mapa_inferior;
// Cargar impresor
$impresor            = new \Base\Imprenta();
$impresor->plantilla = $plantilla;
// Imprimir
try {
    // Al agregar los directorios con las publicaciones se reciben arreglos con las instancias de las publicaciones
    $indicadores_torreon_pubs       = $impresor->agregar_directorio_publicaciones('SMIIndicadoresTorreon');
    $indicadores_gomez_palacio_pubs = $impresor->agregar_directorio_publicaciones('SMIIndicadoresGomezPalacio');
    $indicadores_lerdo_pubs         = $impresor->agregar_directorio_publicaciones('SMIIndicadoresLerdo');
    $indicadores_matamoros_pubs     = $impresor->agregar_directorio_publicaciones('SMIIndicadoresMatamoros');
    $indicadores_la_laguna_pubs     = $impresor->agregar_directorio_publicaciones('SMIIndicadoresLaLaguna');
    echo $impresor->imprimir()."\n";
} catch (\Exception $e) {
    echo implode("\n", $impresor->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}
unset($plantilla);
unset($impresor);

/**
 * SMI Indices
 */
// Cargar la Plantilla Indicadores Torreón, copiar los menús y el arreglo con sus publicaciones
$plantilla_indicadores_torreon                 = new \SMI\PlantillaIndicadoresTorreon();
$plantilla_indicadores_torreon->menu_principal = $menu_principal;
$plantilla_indicadores_torreon->menu_izquierdo = $menu_izquierdo;
$plantilla_indicadores_torreon->mapa_inferior  = $mapa_inferior;
$plantilla_indicadores_torreon->publicaciones  = $indicadores_torreon_pubs;
// Cargar impresor
$impresor            = new \Base\Imprenta();
$impresor->plantilla = $plantilla_indicadores_torreon;
// Imprimir
try {
    echo $impresor->imprimir()."\n";
} catch (\Exception $e) {
    echo implode("\n", $impresor->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}
unset($plantilla_indicadores_torreon);
unset($impresor);

/**
 * SMI Página Inicial
 */
// Cargar la Plantilla Inicial, copiar los menús
$plantilla_inicial                 = new \SMI\PlantillaInicial();
$plantilla_inicial->menu_principal = $menu_principal;
$plantilla_inicial->menu_izquierdo = $menu_izquierdo;
$plantilla_inicial->mapa_inferior  = $mapa_inferior;
// Cargar impresor
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
