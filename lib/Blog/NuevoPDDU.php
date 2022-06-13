<?php
/**
 * TrcIMPLAN Sitio Web - NuevoPDDU
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
 * Clase NuevoPDDU
 */
class NuevoPDDU extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = '¿Para qué actualizar el Plan Director de Desarrollo Urbano de Torreón?';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2022-06-13T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'nuevo-pddu-junio-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Un ejemplo claro de su necesidad es el crecimiento desproporcional que hemos tenido entre nuestra extensión territorial y la población; mientras que la población ha crecido a razón de 1.52% anual de 1990 a 2020, la extensión territorial ha aumentado a razón de 3.6% anual en el mismo periodo, es decir, la mancha urbana ha crecido al triple de rápido que su población.';
        $this->claves                     = 'IMPLAN, Torreon, desarrollo, plan, director, urbano, poblacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/NuevoPDDU.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase NuevoPDDU

?>
