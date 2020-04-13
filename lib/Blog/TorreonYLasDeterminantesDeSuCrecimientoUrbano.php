<?php
/**
 * TrcIMPLAN Sitio Web - TorreonYLasDeterminantesDeSuCrecimientoUrbano
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
 * Clase TorreonYLasDeterminantesDeSuCrecimientoUrbano
 */
class TorreonYLasDeterminantesDeSuCrecimientoUrbano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón y las Determinantes de su Crecimiento Urbano';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2020-04-13T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-y-las-determinantes-de-su-crecimiento-urbano-abril2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Desde su fundación, Torreón ha contado con todas las condiciones necesarias para crecer como ciudad. Este crecimiento urbano se observa a partir de la relación entre el aumento de su población y las funciones económicas predominantes.';
        $this->claves                     = 'IMPLAN, Torreon, ciudad, crecimiento, urbano';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonYLasDeterminantesDeSuCrecimientoUrbano.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array('Inegi', 'Conapo');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TorreonYLasDeterminantesDeSuCrecimientoUrbano

?>
