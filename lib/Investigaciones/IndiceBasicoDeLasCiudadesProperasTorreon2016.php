<?php
/**
 * TrcIMPLAN Sitio Web - IndiceBasicoDeLasCiudadesProperasTorreon2016
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

namespace Investigaciones;

/**
 * Clase IndiceBasicoDeLasCiudadesProperasTorreon2016
 */
class IndiceBasicoDeLasCiudadesProperasTorreon2016 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Índice Básico de las Ciudades Prósperas Torreón 2016';
        $this->autor                      = 'Erik Vittrup Christensen';
        $this->fecha                      = '2017-07-27T15:44';
        // El nombre del archivo a crear
        $this->archivo                    = 'indice-basico-de-las-ciudades-prosperas-torreon-2016';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El CPI (City Prosperity Index) de ONU-Habitat contribuye en la medición y debate de las condiciones que definen y condicionan la prosperidad urbana, como un instrumento de información científica y homologado a nivel mundial.';
        $this->claves                     = 'IMPLAN, Torreon, Indice, Ciudades, Prósperas, ICP, City, Prosperity, Index, CPI';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Investigaciones/IndiceBasicoDeLasCiudadesProperasTorreon2016.md';
        // Para el Organizador
        $this->categorias                 = array('Objetivos del Milenio');
        $this->fuentes                    = array('ONU-Habitat');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase IndiceBasicoDeLasCiudadesProperasTorreon2016

?>
