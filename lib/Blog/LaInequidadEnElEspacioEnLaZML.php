<?php
/**
 * TrcIMPLAN Sitio Web - LaInequidadEnElEspacioEnLaZML
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace Blog;

/**
 * Clase LaInequidadEnElEspacioEnLaZML
 */
class LaInequidadEnElEspacioEnLaZML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Inequidad del Espacio en la Zona Metropolitana de La Laguna.';
        $this->autor                      = 'Ing. Rosa Velia Gutiérrez Barrón';
        $this->fecha                      = '2022-04-25T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'inequidad-en-el-espacio-en-la-zml-abril-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La arrogancia del espacio fue un término acuñado para describir el reparto desbalanceado de la infraestructura vial creado por la planeación urbana centrada en el automóvil. Esto pone en desventaja a usuarios de otras modalidades y puede resultar en incidentes fatídicos debido a la vulnerabilidad de los usuarios de traslado no motorizado.';
        $this->claves                     = 'IMPLAN, Torreon, espacio, motorizado, vial';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaInequidadEnElEspacioEnLaZML.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Movilidad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaInequidadEnElEspacioEnLaZML

?>
