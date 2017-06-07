<?php
/**
 * TrcIMPLAN Sitio Web - La Laguna: Capital Humano y Calidad de Vida
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
 * Clase LaLagunaCapitalHumanoYCalidadDeVida
 */
class LaLagunaCapitalHumanoYCalidadDeVida extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Laguna: Capital Humano y Calidad de Vida';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2015-11-16T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-laguna-capital-humano-y-calidad-de-vida';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Zona Metropolitana mantiene primeros lugares a nivel nacional en diferentes rubros, que la ubican como una de las mejores regiones para habitar. Torreón destaca como ejemplo.';
        $this->claves                     = 'IMPLAN, Torreon, Capital Humano, Calidad de Vida';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaLagunaCapitalHumanoYCalidadDeVida.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        // Para el Organizador
        $this->categorias                 = array('Educación', 'Empleo', 'Género', 'Población', 'Salud');
        $this->fuentes                    = array('INEGI', 'CONAPO', 'IMCO', 'SEP', 'CONEVAL');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LaLagunaCapitalHumanoYCalidadDeVida

?>
