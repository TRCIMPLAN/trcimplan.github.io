<?php
/**
 * TrcIMPLAN Sitio Web - Reflexión del Crecimiento Urbano en Torreón
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
 * Clase ReflexionCrecimientoUrbanoTorreon
 */
class ReflexionCrecimientoUrbanoTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reflexión del Crecimiento Urbano en Torreón';
        $this->autor                      = 'Arq. Ilse Ávila García';
        $this->fecha                      = '2015-05-27T16:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'reflexion-crecimiento-urbano-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La ciudad de Torreón nace a partir de la visión de Sr. Andrés Guillermo Eppen con trazos ordenados, calles anchas, manzanas cuadradas y alineadas con la vía de ferrocarril.';
        $this->claves                     = 'IMPLAN, Torreon, Historia, Calles, Manzanas, Trazos, Crecimiento, Ordenado';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ReflexionCrecimientoUrbanoTorreon.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ReflexionCrecimientoUrbanoTorreon

?>
