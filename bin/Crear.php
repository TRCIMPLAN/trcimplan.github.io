#!/usr/bin/env php
<?php
/*
 * SMIbeta - Crear
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
$soy = '[Crear]';

// Valores de salida
$EXITO=0;
$E_FATAL=99;

// Cambiarse al directorio por debajo de donde se encuentra este programa
chdir(realpath(dirname(__FILE__))."/..");

// Cargar funciones, éste conteniene el autocargador de clases
require_once('lib/Base/Funciones.php');

// Mensaje de inicio
echo "$soy Inicia\n";

// En este arreglo están las rutas a las clases Imprenta
$clases = array(
    '\Blog\Imprenta',
    '\ConsejoDirectivo\Imprenta',
    '\Contacto\Imprenta',
    '\Institucional\Imprenta',
    '\PlanEstrategicoMetropolitano\Imprenta',
    '\PreguntasFrecuentes\Imprenta',
    '\Proyectos\Imprenta',
    '\SalaPrensa\Imprenta',
    '\SIG\Imprenta',
    '\SIGMapasTorreon\Imprenta',
    '\SIGPlanes\Imprenta',
    '\SMI\Imprenta',
    '\SMIIndicadoresTorreon\Imprenta',
    '\SMIIndicadoresGomezPalacio\Imprenta',
    '\SMIIndicadoresLerdo\Imprenta',
    '\SMIIndicadoresMatamoros\Imprenta',
    '\SMIIndicadoresLaLaguna\Imprenta',
    '\SMICategorias\Imprenta',
    '\SMIGeorreferenciados\Imprenta',
    '\Terminos\Imprenta');
// Imprimir
try {
    foreach ($clases as $clase) {
        $impresor = new $clase();
        echo '  '.$impresor->imprimir()."\n";
    }
} catch (\Exception $e) {
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}

// Cargar la página inicial
$impresor            = new \Base\Imprenta();
$impresor->plantilla = new \Inicial\PaginaInicial();
// Imprimir
try {
    echo '  Página inicial '.$impresor->imprimir()."\n";
} catch (\Exception $e) {
    echo implode("\n", $impresor->mensajes)."\n";
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}

// Cargar la página Buscador Resultados
$impresor            = new \Base\Imprenta();
$impresor->plantilla = new \Inicial\PaginaBuscadorResultados();
// Imprimir
try {
    echo '  Para la página de resultados del buscador '.$impresor->imprimir()."\n";
} catch (\Exception $e) {
    echo "$soy ".$e->getMessage()."\n";
    exit($E_FATAL);
}

// Mensaje de término
echo "$soy Terminó\n";
exit($EXITO);

?>
