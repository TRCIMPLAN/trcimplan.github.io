<?php
/**
 * TrcIMPLAN Sitio Web - TorreonCiudadDeTransitoParaLosMigrantes
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
 * Clase TorreonCiudadDeTransitoParaLosMigrantes
 */
class TorreonCiudadDeTransitoParaLosMigrantes extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón, ciudad de tránsito para los migrantes';
        $this->autor                      = 'Lic. Olga Alejandra Noriega Aranda';
        $this->fecha                      = '2021-08-12T14:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-ciudad-de-transito-para-los-migrantes-ago-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Según el comedor Santa Cecilia ubicado en Torreón, la mayoría de los migrantes que atienden son provenientes de Honduras, Guatemala, El Salvador y Nicaragua; y en periodos específicos de Belice y Haití.';
        $this->claves                     = 'IMPLAN, Torreon, migrantes, transito';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonCiudadDeTransitoParaLosMigrantes.md';
        // Para el Organizador
        $this->categorias                 = array('Población', 'Empleo');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase TorreonCiudadDeTransitoParaLosMigrantes

?>
