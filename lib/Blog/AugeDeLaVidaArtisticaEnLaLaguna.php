<?php
/**
 * TrcIMPLAN Sitio Web - AugeDeLaVidaArtisticaEnLaLaguna
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
 * Clase AugeDeLaVidaArtisticaEnLaLaguna
 */
class AugeDeLaVidaArtisticaEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Auge de la vida artística en La Laguna';
        $this->autor                      = 'Lic. Daniel Alejandro López Murga';
        $this->fecha                      = '2019-05-15T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'auge-de-la-vida-artistica-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo a registros del Instituto Municipal de Cultura y Educación (IMCE), en 2018 se realizaron 401 eventos artísticos en Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Cultura, arte, eventos artisticos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AugeDeLaVidaArtisticaEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura');
        $this->fuentes                    = array('IMCE', 'DENUE', 'INEGI','ANUIES');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase AugeDeLaVidaArtisticaEnLaLaguna

?>
