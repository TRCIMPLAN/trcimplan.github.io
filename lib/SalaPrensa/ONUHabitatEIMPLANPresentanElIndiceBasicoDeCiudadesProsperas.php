<?php
/**
 * TrcIMPLAN Sitio Web - ONUHabitatEIMPLANPresentanElIndiceBasicoDeCiudadesProsperas
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
 * Clase ONUHabitatEIMPLANPresentanElIndiceBasicoDeCiudadesProsperas
 */
class ONUHabitatEIMPLANPresentanElIndiceBasicoDeCiudadesProsperas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'ONU Hábitat e IMPLAN presentan el Índice Básico de Ciudades Prósperas';
        $this->fecha                      = '2017-07-28T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-07-28-onu-habitat-e-implan-presentan-el-indice-basico-de-ciudades-prosperas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Sesión Ordinaria de Consejo Directivo el IMPLAN realizó este viernes la presentación del Índice Básico de Ciudades Prósperas para Torreón, un documento elaborado por ONU Hábitat.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ONUHabitatEIMPLANPresentanElIndiceBasicoDeCiudadesProsperas.md';
        // Para el Organizador
        $this->categorias                 = array('Objetivos del Milenio');
        $this->fuentes                    = array('ONU-Habitat');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase ONUHabitatEIMPLANPresentanElIndiceBasicoDeCiudadesProsperas

?>
