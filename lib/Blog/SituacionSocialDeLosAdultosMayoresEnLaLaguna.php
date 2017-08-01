<?php
/**
 * TrcIMPLAN Sitio Web - SituacionSocialDeLosAdultosMayoresEnLaLaguna
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
 * Clase SituacionSocialDeLosAdultosMayoresEnLaLaguna
 */
class SituacionSocialDeLosAdultosMayoresEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Situación social de los adultos mayores en La Laguna';
        $this->autor                      = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha                      = '2017-08-01T10:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'situacion-social-de-los-adultos-mayores-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La población de adultos mayores sin derechohabiencia en La Laguna es de más de 8,573 personas. Según los Indicadores Básicos de Colonias del IMPLAN, 41 colonias de escasos recursos y que forman parte de los polígonos de pobreza, concentran un alto índice de personas de 65 años y más.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SituacionSocialDeLosAdultosMayoresEnLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Grupos Vulnerables');
        $this->fuentes                    = array('CONAPO', 'ONU-Habitat');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SituacionSocialDeLosAdultosMayoresEnLaLaguna

?>
