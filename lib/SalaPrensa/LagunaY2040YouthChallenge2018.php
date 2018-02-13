<?php
/**
 * TrcIMPLAN Sitio Web - LagunaY2040YouthChallenge2018
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
 * Clase LagunaY2040YouthChallenge2018
 */
class LagunaY2040YouthChallenge2018 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Presentan segunda edición del encuentro Laguna Y2040 Youth Challenge 2018';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2018-02-12T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2018-02-12-laguna-y2040-youth-challenge-2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se contará con un panel de expertos en los seis ejes del Plan TRC2040, donde se espera la asistencia de 1,000 personas; participarán 600 universitarios en mesas de trabajo. En “Mi acción de Liderazgo” se busca alcanzar 60,000 impactos positivos en la región.';
        $this->claves                     = 'IMPLAN, Torreon, Y2040';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/LagunaY2040YouthChallenge2018.md';
        // Para el Organizador
        $this->categorias                 = array('Educación', 'Movilidad', 'Competitividad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LagunaY2040YouthChallenge2018

?>
