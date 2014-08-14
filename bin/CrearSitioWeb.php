#!/usr/bin/env php
<?php
/*
 * SMIbeta - SMI Crear Sitio Web
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

// Crear SMI Indicadores
$imprenta_indicadores = new \SMIIndicadores\Imprenta();
try {
    echo $imprenta_indicadores->imprimir()."\n";
} catch (\Exception $e) {
    echo implode("\n", $imprenta_indicadores->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}

// Crear SMI Matrices

// Mensaje de término
echo "$soy Programa terminado.\n";
exit($EXITO);

?>
