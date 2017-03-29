<?php
/**
 * TrcIMPLAN Sitio Web - MuestraMejoriaElMercadoLaboralDeLaLaguna
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
 * Clase MuestraMejoriaElMercadoLaboralDeLaLaguna
 */
class MuestraMejoriaElMercadoLaboralDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Muestra mejoría el mercado laboral de La Laguna';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2017-03-29T10:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'muestra-mejoria-el-mercado-laboral-de-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La evolución en el mercado laboral fue general en la Zona Metropolitana al cierre del año pasado. La formalidad, los salarios y hasta las condiciones de ocupación se mostraron congruentes con la disminución del desempleo.';
        $this->claves                     = 'IMPLAN, Torreon, Mercado Laboral, La Laguna';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MuestraMejoriaElMercadoLaboralDeLaLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Empleo');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase MuestraMejoriaElMercadoLaboralDeLaLaguna

?>
