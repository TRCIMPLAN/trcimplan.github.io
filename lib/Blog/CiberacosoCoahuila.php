<?php
/**
 * TrcIMPLAN Sitio Web - CiberacosoCoahuila
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
 * Clase CiberacosoCoahuila
 */
class CiberacosoCoahuila extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Coahuila supera la media nacional en ciberacoso';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2019-04-22T00:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciberacoso-coahuila-abril2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo al estudio del INEGI, el 18.9% de la población en Coahuila de 12 a 59 años de edad, ha vivido ciberacoso en el último año; y en Durango fue el 17.3%. Los dos estados se encuentran por encima de la media nacional, que es de 16.8%.';
        $this->claves                     = 'IMPLAN, Torreon, ciberacoso, coahuila';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CiberacosoCoahuila.md';
        // Para el Organizador
        $this->categorias                 = array('Seguridad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CiberacosoCoahuila

?>
