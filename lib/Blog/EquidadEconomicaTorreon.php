<?php
/**
 * TrcIMPLAN Sitio Web - Equidad Económica en Torreón
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
 * Clase EquidadEconomicaTorreon
 */
class EquidadEconomicaTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Equidad Económica en Torreón';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-04-03T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'equidad-economica-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón, como la zona metropolitana de La Laguna, se encuentra en una situación favorable en temas de igualdad y cohesión social.';
        $this->claves                     = 'IMPLAN, Torreon, Igualdad, Género, Gini, Distribución, Riqueza';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/EquidadEconomicaTorreon.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Macroeconomía', 'Grupos Vulnerables', 'Población');
        $this->fuentes                    = array('CONEVAL', 'INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EquidadEconomicaTorreon

?>
