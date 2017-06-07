<?php
/**
 * TrcIMPLAN Sitio Web - ProgramaIrritilaBuscaElApoyoDeLaSociedadCivil
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
 * Clase ProgramaIrritilaBuscaElApoyoDeLaSociedadCivil
 */
class ProgramaIrritilaBuscaElApoyoDeLaSociedadCivil extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Programa Irritila busca el apoyo de la sociedad civil';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-02-24T11:15';
        // El nombre del archivo a crear
        $this->archivo                    = 'programa-irritila-busca-el-apoyo-de-la-sociedad-civil';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Uno de los principales proyectos de sustentabilidad en la región necesita más fondos para revertir el abatimiento del manto acuífero en la región Lagunera. El apoyo de la ciudadanía y de la iniciativa privada es fundamental para que continúe la preservación de la Cuenca Alta del Río Nazas.';
        $this->claves                     = 'IMPLAN, Torreon, Sustentabilidad, Agua, Irritila, Manto, Acuifero';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ProgramaIrritilaBuscaElApoyoDeLaSociedadCivil.md';
        // Para el Organizador
        $this->categorias                 = array('Recursos Naturales', 'Salud', 'Servicios Públicos');
        $this->fuentes                    = array('SIMAS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ProgramaIrritilaBuscaElApoyoDeLaSociedadCivil

?>
