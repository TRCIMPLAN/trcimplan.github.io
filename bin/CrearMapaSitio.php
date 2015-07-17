#!/usr/bin/env php
<?php
/*
 * SMIbeta - Crear Mapa del Sitio
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
$soy = '[Crear Mapa del Sitio]';

// Valores de salida
$EXITO=0;
$E_FATAL=99;

// Cambiarse al directorio por debajo de donde se encuentra este programa
chdir(realpath(dirname(__FILE__))."/..");

// Cargar funciones, éste conteniene el autocargador de clases
require_once('lib/Base/Funciones.php');

// Mensaje de inicio
echo "$soy Inicia.\n";

// Iniciar el mapa
$mapa = new \Base\MapaSitio();
$mapa->agregar_url('index.html', date('Y-m-d'), 'daily', '1'); // la página inicial

// Arreglo con los directorios de donde se tomarán las publicaciones
$directorios = array(
    'Blog',
    'ConsejoDirectivo',
    'Contacto',
    'Eventos',
    'Institucional',
    'PlanEstrategicoMetropolitano',
    'PreguntasFrecuentes',
    'Proyectos',
    'SalaPrensa',
    'SIG',
    'SIGMapasTorreon',
    'SIGPlanes',
    'SMI',
    'SMICategorias',
    'SMIIndicadoresTorreon',
    'SMIIndicadoresGomezPalacio',
    'SMIIndicadoresLerdo',
    'SMIIndicadoresMatamoros',
    'SMIIndicadoresLaLaguna',
    'Terminos');

// Recolectar publicaciones
$impresor = new \Base\Imprenta();
try {
    foreach ($directorios as $dir) {
        $impresor->agregar_directorio_publicaciones($dir);
    }
    foreach ($impresor->publicaciones as $publicacion) {
        $publicacion->en_raiz = true;
        $mapa->agregar_url($publicacion->url(), $publicacion->fecha, 'monthly', '1');
    }
    echo $impresor->crear_archivo($mapa->archivo, $mapa->xml())."\n";
} catch (\Exception $e) {
    //~ echo implode("\n", $impresor->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}

// Mensaje de término
echo "$soy Terminó.\n";
exit($EXITO);

?>
