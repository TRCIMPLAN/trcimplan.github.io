<?php
/**
 * TrcIMPLAN Sitio Web - El Gas Shale y su impacto
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
 * Clase GasShaleImpacto
 */
class GasShaleImpacto extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Gas Shale y su impacto';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2014-08-01T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'gas-shale-impacto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La extracción del gas shale se contempla en el futuro cercano de México, pues además de contar con una de las reservas más grandes del mundo, ha contribuido positivamente en la economía de los países que lo utilizan.';
        $this->claves                     = 'IMPLAN, Torreon, Gas Shale, Energía';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/GasShaleImpacto.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Innovación', 'Recursos Naturales', 'Empresas');
        $this->fuentes                    = array();
        $this->regiones                   = array('Coahuila', 'Nacional');
    } // constructor

} // Clase GasShaleImpacto

?>
