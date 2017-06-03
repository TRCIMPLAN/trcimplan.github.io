<?php
/**
 * TrcIMPLAN Sitio Web - Innovación, Internet y Competitividad
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
 * Clase InnovacionInternetCompetitividad
 */
class InnovacionInternetCompetitividad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Innovación, Internet y Competitividad';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2015-04-08T14:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'innovacion-internet-competitividad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Cada día se hace más necesario que el gobierno realice gran número de sus trámites por Internet. Los ciudadanos y la banca lo exigen en aras de aumentar la competitividad.';
        $this->claves                     = 'IMPLAN, Torreon, Internet, Trámites, Gobierno';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InnovacionInternetCompetitividad.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Innovación', 'Gobierno Digital');
        $this->fuentes                    = array('INEGI', 'Asociación Mexicana de Internet (AMIPCI)');
        $this->regiones                   = array('Nacional');
    } // constructor

} // Clase InnovacionInternetCompetitividad

?>
