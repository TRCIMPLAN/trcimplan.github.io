<?php
/**
 * TrcIMPLAN Sitio Web - Polígonos de Actuación para un Desarrollo Urbano Integral
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
 * Clase PoligonosActuacionDesarrolloUrbanoIntegral
 */
class PoligonosActuacionDesarrolloUrbanoIntegral extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Polígonos de Actuación para un Desarrollo Urbano Integral';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2014-10-14T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'poligonos-actuacion-desarrollo-urbano-integral';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El nuevo modelo de desarrollo urbano mexicano que se impulsa en el país es el de fomentar la consolidación de las ciudades y lograr que sean más competitivas, equilibradas, densas, prósperas, justas, seguras y sustentables.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/PoligonosActuacionDesarrolloUrbanoIntegral.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Recursos Naturales', 'Vivienda');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase PoligonosActuacionDesarrolloUrbanoIntegral

?>
