<?php
/**
 * TrcIMPLAN Sitio Web - La Prevención del Delito como elemento fundamental para la Seguridad
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
 * Clase PrevencionDelitoSeguridad
 */
class PrevencionDelitoSeguridad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Prevención del Delito como elemento fundamental para la Seguridad';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2014-11-18T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'prevencion-delito-seguridad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La prevención del delito debe ser el elemento central en la búsqueda de la seguridad en la Zona Metropolitana de la Laguna (ZML).';
        $this->claves                     = 'IMPLAN, Torreon, Prevecion, Delito, Seguridad';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/PrevencionDelitoSeguridad.html';
        // Para el Organizador
        $this->categorias                 = array('Delincuencia', 'Seguridad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase PrevencionDelitoSeguridad

?>
