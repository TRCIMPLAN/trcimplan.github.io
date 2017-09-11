<?php
/**
 * TrcIMPLAN Sitio Web - ResaltanLaImportanciaDelEspacioPublico
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

namespace SalaPrensa;

/**
 * Clase ResaltanLaImportanciaDelEspacioPublico
 */
class ResaltanLaImportanciaDelEspacioPublico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Resaltan la importancia del espacio público';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2017-09-11T10:40';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-09-11-resaltan-la-importancia-del-espacio-publico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Gabriel Todd, quien ha sido director del IMPLANc de Monterrey destacó la importancia del espacio público y el derecho a la ciudad dentro de la Ley General de Asentamientos Humanos.';
        $this->claves                     = 'IMPLAN, Torreon, Gabriel Todd, Espacios, Publicos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ResaltanLaImportanciaDelEspacioPublico.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Infraesetructura', 'Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ResaltanLaImportanciaDelEspacioPublico

?>
