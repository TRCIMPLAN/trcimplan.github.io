<?php
/*
 * SMIbeta - SMI PlantillaHTML Config
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

// NAMESPACE
namespace Configuracion;

/**
 * Clase PlantillaHTMLConfig
 */
class PlantillaHTMLConfig {

    public $sitio_titulo        = 'IMPLAN Torreón S.M.I.';
    public $sitio_url           = 'http://trcimplan.github.io';
    public $rss                 = 'rss.xml';
    public $favicon             = 'imagenes/favicon.png';
    public $menu_principal_logo = 'imagenes/implan-barra-logo.png';
    public $pie                 = '<p>Todos los Derechos Reservados. Instituto Municipal de Planeación y Competitividad de Torreón © 2014</p>';
    public $en_raiz             = false; // Si es verdadero los vínculos serán para un archivo en la raíz del sitio
    public $para_compartir      = true;  // Si es verdadero pondrá los metas para tarjetas en Twitter/Facebook

} // Clase PlantillaHTMLConfig

?>
