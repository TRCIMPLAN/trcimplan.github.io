<?php
/*
 * SMIbeta - Plantilla Configuración
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

// Namespace
namespace Configuracion;

/**
 * Clase PlantillaConfig
 */
class PlantillaConfig {

    public $sitio_titulo   = 'IMPLAN Torreón';
    public $sitio_url      = 'http://trcimplan.gob.mx';
    public $rss            = 'rss.xml';
    public $favicon        = 'imagenes/favicon.png';
    public $propio_css     = 'css/trcimplan.css';
    public $en_raiz        = false;       // Si es verdadero los vínculos serán para un archivo en la raíz del sitio
    public $para_compartir = true;        // Si es verdadero pondrá los metas para tarjetas en Twitter/Facebook
    public $autor          = 'TrcIMPLAN'; // Autor por defecto
    public $mensaje_oculto = <<<FINAL
<!-- ========================================================================================

        Instituto Municipal de Planeación y Competitividad de Torreón.
        Todos los Derechos Reservados. © 2014.

        Este sistema fue elaborado por personal del IMPLAN Torreón.
        Es publicado como Software Libre bajo la licencia GPL versión 3.

        Descargue, estudie y colabore con el IMPLAN Torreón por medio de GitHub:
           GitHub             https://github.com/TRCIMPLAN

        Agradecemos y compartimos las tecnologías abiertas sobre las que se basa:
           Twitter Bootstrap  http://getbootstrap.com
           StartBootStrap     http://startbootstrap.com
           Morris.js          http://www.oesmith.co.uk/morris.js
           LeafLet            http://leafletjs.com

     ======================================================================================== -->
FINAL;
    public $pie            = '  <p>Todos los Derechos Reservados. Instituto Municipal de Planeación y Competitividad de Torreón © 2014</p>';

} // Clase PlantillaConfig

?>
