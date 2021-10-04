<?php
/**
 * TrcIMPLAN Sitio Web - ArteUrbanoEnLaZML
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
 * Clase ArteUrbanoEnLaZML
 */
class ArteUrbanoEnLaZML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Arte Urbano en la Zona Metropolitana de La Laguna';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2021-10-04T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'arte-urbano-en-la-zml-oct-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Desde mayo del 2020, el Consejo Visión Metrópoli ha estado trabajando en el tema de Arte Urbano en la Zona Metropolitana de La Laguna. La idea: establecer un diálogo con la ciudadanía y sus artistas urbanos/as, estableciendo una línea de comunicación, convivencia y visibilidad sobre los procesos artísticos que se dan en la ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, arte, urbano, grafiti';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ArteUrbanoEnLaZML.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ArteUrbanoEnLaZML

?>
