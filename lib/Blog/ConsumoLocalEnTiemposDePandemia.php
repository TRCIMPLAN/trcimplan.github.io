<?php
/**
 * TrcIMPLAN Sitio Web - ConsumoLocalEnTiemposDePandemia
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
 * Clase ConsumoLocalEnTiemposDePandemia
 */
class ConsumoLocalEnTiemposDePandemia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Consumo local en tiempos de pandemia';
        $this->autor                      = 'Lic. Nina Graciela Hernández Jayme';
        $this->fecha                      = '2020-09-14T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'consumo-local-en-tiempos-de-pandemia-sep-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La llegada del virus COVID-19 no solo trajo la preocupación de un contagio a la población mexicana si no también consecuencias económicas para las familias que viven del comercio. Hoy más que nunca es importante apoyar a los negocios locales para ayudar a reactivar la economía lagunera.';
        $this->claves                     = 'IMPLAN, Torreon, pandemia, virus, economia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ConsumoLocalEnTiemposDePandemia.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Población');
        $this->fuentes                    = array('Inegi');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ConsumoLocalEnTiemposDePandemia

?>
