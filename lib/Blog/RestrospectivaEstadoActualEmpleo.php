<?php
/**
 * TrcIMPLAN Sitio Web - Retrospectiva y estado actual del empleo en Torreón y la Zona Metropolitana de La Laguna
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
 * Clase RestrospectivaEstadoActualEmpleo
 */
class RestrospectivaEstadoActualEmpleo extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Retrospectiva y estado actual del empleo en Torreón y la ZML';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2014-09-26T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'retrospectiva-estado-actual-empleo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El empleo es uno de los principales indicadores, que muestra el desempeño económico de una ciudad, región o país. Desde hace 9 años Torreón y la Zona Metropolitana de la Laguna se habían separado a la alza de la media nacional.';
        $this->claves                     = 'IMPLAN, Torreon, Empleo';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/RestrospectivaEstadoActualEmpleo.html';
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase RestrospectivaEstadoActualEmpleo

?>
