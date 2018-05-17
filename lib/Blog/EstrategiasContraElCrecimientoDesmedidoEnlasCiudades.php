<?php
/**
 * TrcIMPLAN Sitio Web - EstrategiasContraElCrecimientoDesmedidoEnlasCiudades
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
 * Clase EstrategiasContraElCrecimientoDesmedidoEnlasCiudades
 */
class EstrategiasContraElCrecimientoDesmedidoEnlasCiudades extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Estrategias contra el crecimiento desmedido en las ciudades';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2018-05-17T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'estrategias-contra-el-crecimiento-desmedido-en-las-ciudades';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Con los Perímetros de Contención Urbana (PCU) propuestos por la CONAVI, se busca crear ciudades más compactas con mayor densidad de población y actividad económica, fomentando la nueva vivienda sustentable desde las dimensiones económica, ecológica y social.';
        $this->claves                     = 'IMPLAN, Torreon, ciudades, crecimiento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EstrategiasContraElCrecimientoDesmedidoEnlasCiudades.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Población', 'Vivienda');
        $this->fuentes                    = array('SEDATU', 'CONAVI','CONAPO');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EstrategiasContraElCrecimientoDesmedidoEnlasCiudades

?>
