<?php
/**
 * TrcIMPLAN Sitio Web - Sociedad Incluyente, Preparada y Sana
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
 * Clase SociedadIncluyentePreparadaSana
 */
class SociedadIncluyentePreparadaSana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Sociedad Incluyente, Preparada y Sana';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2014-06-06T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'sociedad-incluyente-preparada-sana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Este es uno de los subíndices que muestra mayores contrastes al interior de la zona metropolitana, ubicándose Torreón en la parte alta del ranking, la ZML en su conjunto en media alta, Gómez Palacio y Lerdo en media baja y Matamoros en la zona baja.';
        $this->claves                     = 'IMPLAN, Torreon, Sociedad, Incluyente, Preparada, Sana';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/SociedadIncluyentePreparadaSana.html';
        // Para el Organizador
        $this->categorias                 = array('Educación', 'Bienestar', 'Vivienda');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase SociedadIncluyentePreparadaSana

?>
