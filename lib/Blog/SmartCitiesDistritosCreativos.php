<?php
/**
 * TrcIMPLAN Sitio Web - SmartCitiesDistritosCreativos
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
 * Clase SmartCitiesDistritosCreativos
 */
class SmartCitiesDistritosCreativos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Smart Cities: Distritos creativos';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2023-02-07T08:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'smart-cities-ene-2023';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las ciudades son hoy en día el escenario de la vida humana. Según datos del Banco Mundial, el 56% de la población total habita en ciudades, en México este porcentaje aumenta al 81%. Por este motivo, son las ciudades áreas de oportunidad para generar acciones con gran impacto en la mejora de la calidad de vida de la población.';
        $this->claves                     = 'IMPLAN, Torreon, smartcities, ciudades, inteligentes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SmartCitiesDistritosCreativos.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SmartCitiesDistritosCreativos

?>
