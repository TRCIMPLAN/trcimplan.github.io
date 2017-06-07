<?php
/**
 * TrcIMPLAN Sitio Web - Relaciones Internacionales
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
 * Clase RelacionesInternacionales
 */
class RelacionesInternacionales extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Relaciones Internacionales';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2014-06-30T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'relaciones-internacionales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Análisis de las cuestiones internacionales como la inversión extranjera, el flujo de pasajeros y la ausencia de puertos o frontera con otro país.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/RelacionesInternacionales.html';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Macroeconomía', 'Transporte');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase RelacionesInternacionales

?>
