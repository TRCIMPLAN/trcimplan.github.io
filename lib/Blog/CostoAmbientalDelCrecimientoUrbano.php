<?php
/**
 * TrcIMPLAN Sitio Web - CostoAmbientalDelCrecimientoUrbano
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
 * Clase CostoAmbientalDelCrecimientoUrbano
 */
class CostoAmbientalDelCrecimientoUrbano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El costo ambiental del crecimiento urbano y la acción local para mitigarlo.';
        $this->autor                      = 'Arq. José Antonio Ramírez Reyes';
        $this->fecha                      = '2021-03-29T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'costo-ambiental-del-crecimiento-urbano-mar-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las ciudades representan uno de los más importantes inventos del hombre. En ellas podemos encontrar la solución para satisfacer nuestras necesidades, desde las más básicas como el consumo de alimento o agua, hasta las más subjetivas como la superación profesional. Estas necesidades se ven solventadas en cierto grado gracias a la densidad de población, la diversidad y a los sistemas complejos de servicios, redes, flujos, división de trabajo y especialización económica.';
        $this->claves                     = 'IMPLAN, Torreon, ciudades, ambiente, crecimiento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CostoAmbientalDelCrecimientoUrbano.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente', 'Población');
        $this->fuentes                    = array('ONU-HABITAT');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CostoAmbientalDelCrecimientoUrbano

?>
