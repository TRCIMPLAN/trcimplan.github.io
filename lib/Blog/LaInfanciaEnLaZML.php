<?php
/**
 * TrcIMPLAN Sitio Web - LaInfanciaEnLaZML
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
 * Clase LaInfanciaEnLaZML
 */
class LaInfanciaEnLaZML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Datos sobre la infancia en la ZML y en Coahuila';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2018-04-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'datos-sobre-la-infancia-en-la-zml-y-en-coahuila';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Coahuila el 6% de la población infantil trabaja; cifra que es menor a la nacional de 8.4%; sin embargo, Durango presenta un porcentaje superior al nacional con 11.39%.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaInfanciaEnLaZML.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array('UNICEF');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaInfanciaEnLaZML

?>
