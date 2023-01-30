<?php
/**
 * TrcIMPLAN Sitio Web - ImportanciaDeLaCartografiaElectoral
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
 * Clase ImportanciaDeLaCartografiaElectoral
 */
class ImportanciaDeLaCartografiaElectoral extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Importancia de la Cartografía Electoral';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2023-01-30T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'importancia-de-la-cartografia-electoral-ene-2023';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El próximo domingo 4 de junio de 2023, en los Estados de Coahuila y el Estado de México se estará llevando a cabo las votaciones para elegir a la persona a cargo de la gobernatura de la entidad. A su vez, en el Estado de Coahuila también se estarán eligiendo a 25 representantes de las diputaciones para el Congreso del Estado.';
        $this->claves                     = 'IMPLAN, Torreon, elecciones, electoral, cartografia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ImportanciaDeLaCartografiaElectoral.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno');
        $this->fuentes                    = array('INE');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ImportanciaDeLaCartografiaElectoral

?>
