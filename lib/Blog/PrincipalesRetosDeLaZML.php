<?php
/**
 * TrcIMPLAN Sitio Web - Principales retos de la Zona Metropolitana de La Laguna
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
 * Clase PrincipalesRetosDeLaZML
 */
class PrincipalesRetosDeLaZML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Principales retos de la Zona Metropolitana de La Laguna';
        $this->autor                      = 'Arq. Ilse Ávila García';
        $this->fecha                      = '2016-03-09T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'principales-retos-de-la-zona-metropolitana-de-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Es necesaria una concertación entre los cuatro municipios de la ZML (Torreón, Matamoros, Gómez Palacio y Lerdo) por medio de una agenda de temas metropolitananos, en los ejes de: Buen Gobierno, Desarrollo Económico, Desarrollo Social, Entorno Urbano, Movilidad, Medio Ambiente y Sustentabilidad.';
        $this->claves                     = 'IMPLAN, Torreon, Comarca Lagunera, Retos, Movilidad, Infraestructura, Recursos, Vivienda, Gobierno';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PrincipalesRetosDeLaZML.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Gobierno', 'Infraestructura', 'Movilidad', 'Recursos Naturales', 'Vivienda');
        $this->fuentes                    = array('CONAPO', 'Secretaría de Desarrollo Urbano Territorial y Urbano (SEDATU)', 'INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PrincipalesRetosDeLaZML

?>
