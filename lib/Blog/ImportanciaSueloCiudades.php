<?php
/**
 * TrcIMPLAN Sitio Web - La importancia del suelo en las ciudades
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
 * Clase ImportanciaSueloCiudades
 */
class ImportanciaSueloCiudades extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La importancia del suelo en las ciudades';
        $this->autor                      = 'Arq. Ilse Ávila García';
        $this->fecha                      = '2014-10-15T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'importancia-suelo-ciudades';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En México el suelo en grandes proporciones ha pasado de ser rural a urbano; la disponibilidad y ordenamiento del mismo son básicos dentro del desarrollo actual.';
        $this->claves                     = 'IMPLAN, Torreon, Suelo, Urbano, Ordenamiento';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/ImportanciaSueloCiudades.html';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Vivienda', 'Recursos Naturales');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ImportanciaSueloCiudades

?>
