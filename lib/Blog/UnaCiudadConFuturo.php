<?php
/**
 * TrcIMPLAN Sitio Web - Una ciudad con futuro
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
 * Clase UnaCiudadConFuturo
 */
class UnaCiudadConFuturo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Una ciudad con futuro';
        $this->autor                      = 'Lic. Enrique Sada Sandoval';
        $this->fecha                      = '2014-09-17T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'una-ciudad-con-futuro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Es grande el legado histórico de la ciudad de Torreón, su importancia y la bonanza del pasado. Hoy, el lanzamiento del Plan Estratégico Metropolitano es la apuesta por el futuro de la ciudad con más productividad.';
        $this->claves                     = 'IMPLAN, Torreon, Plan Estrategico Metropolitano';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/UnaCiudadConFuturo.html';
        // Para el Organizador
        $this->categorias                 = array('Cultura');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase UnaCiudadConFuturo

?>
