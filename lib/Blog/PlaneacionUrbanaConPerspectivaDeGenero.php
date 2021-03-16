<?php
/**
 * TrcIMPLAN Sitio Web - PlaneacionUrbanaConPerspectivaDeGenero
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
 * Clase PlaneacionUrbanaConPerspectivaDeGenero
 */
class PlaneacionUrbanaConPerspectivaDeGenero extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Planeación Urbana con Perspectiva de Género, el Concepto de Ciudad Cuidadora';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2021-03-16T01:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'planeacion-urbana-con-perspectiva-de-genero-mar-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“El objetivo del urbanismo debería ser poder vivir en barrios inclusivos que tengan en cuenta la diversidad real que caracteriza a los espacios urbanos, y así hacer posible que el derecho a la ciudad sea un derecho humano para todas las personas.” Z. MUXI et al.';
        $this->claves                     = 'IMPLAN, Torreon, urbanismo, inclusividad, espacios, derecho';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PlaneacionUrbanaConPerspectivaDeGenero.md';
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables', 'Población');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PlaneacionUrbanaConPerspectivaDeGenero

?>
