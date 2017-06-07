<?php
/**
 * TrcIMPLAN Sitio Web - Regeneración Urbana para una Mejor Calidad de Vida
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
 * Clase RegeneracionUrbanaParaUnaMejorCalidadDeVida
 */
class RegeneracionUrbanaParaUnaMejorCalidadDeVida extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Regeneración Urbana para una Mejor Calidad de Vida';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2015-09-09T13:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'regeneracion-urbana-para-una-calidad-de-vida';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La regeneración implica recuperar la funcionalidad y la revitalización de la trama urbana del municipio, para lograr el modelo de ciudad sostenible que en la actualidad se quiere alcanzar.';
        $this->claves                     = 'IMPLAN, Torreon, Regeneracion, Urbana';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/RegeneracionUrbanaParaUnaMejorCalidadDeVida.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Cultura', 'Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase RegeneracionUrbanaParaUnaMejorCalidadDeVida

?>
