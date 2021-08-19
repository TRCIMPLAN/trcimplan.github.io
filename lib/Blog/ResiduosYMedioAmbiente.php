<?php
/**
 * TrcIMPLAN Sitio Web - ResiduosYMedioAmbiente
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
 * Clase ResiduosYMedioAmbiente
 */
class ResiduosYMedioAmbiente extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Residuos y Medio Ambiente';
        $this->autor                      = 'QFB. Susana Estens De La Garza';
        $this->fecha                      = '2021-08-19T00:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'residuos-y-medio-ambiente-ago-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En lo relativo al medio ambiente poco se reconoce la capacidad técnica y conocimiento que se requiere para la solución de los problemas.';
        $this->claves                     = 'IMPLAN, Torreon, medio, ambiente';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ResiduosYMedioAmbiente.md';
        // Para el Organizador
        $this->categorias                 = array('MedioAmbiente');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ResiduosYMedioAmbiente

?>
