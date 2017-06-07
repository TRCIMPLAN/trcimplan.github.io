<?php
/**
 * TrcIMPLAN Sitio Web - FirmanLaConvenioFacultadDeIngenieriaCivilDeLaUACYElImplanTorreon
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
 * Clase FirmanLaConvenioFacultadDeIngenieriaCivilDeLaUACYElImplanTorreon
 */
class FirmanLaConvenioFacultadDeIngenieriaCivilDeLaUACYElImplanTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Firman la Convenio Facultad de Ingeniería Civil de la UAC y el IMPLAN Torreón';
        $this->fecha                      = '2017-03-27T14:22';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-03-27-firman-la-convenio-facultad-de-ingenieria-civil-de-la-uac-y-el-implan-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Facultad de Ingeniería Civil de la Universidad Autónoma de Coahuila y el IMPLAN Torreón firmaron un convenio de colaboración para que estudiantes realicen prácticas profesionales.';
        $this->claves                     = 'IMPLAN, Torreon, UAC, Convenio, Ingenieria Civil';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/FirmanLaConvenioFacultadDeIngenieriaCivilDeLaUACYElImplanTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase FirmanLaConvenioFacultadDeIngenieriaCivilDeLaUACYElImplanTorreon

?>
