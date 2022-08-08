<?php
/**
 * TrcIMPLAN Sitio Web - CoahuilaHaciaElEquilibrioDeProgresoYSustentabilidadEnConstruccion
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
 * Clase CoahuilaHaciaElEquilibrioDeProgresoYSustentabilidadEnConstruccion
 */
class CoahuilaHaciaElEquilibrioDeProgresoYSustentabilidadEnConstruccion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Coahuila Hacia el Equilibrio de Progreso y Sustentabilidad en la Industria de la Construcción';
        $this->autor                      = array('Bióloga Eglantina Canales','Ing. Gerardo Berlanga');
        $this->fecha                      = '2022-08-08T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'coahuila-hacia-el-equilibrio-de-progreso-agosto-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las Zonas Metropolitanas de Coahuila albergan a más del 75% de la población estatal, somos un estado eminentemente urbano y metropolitano, nuestras ciudades han crecido a pasos agigantados y con ellas el impacto que generamos al medio ambiente.';
        $this->claves                     = 'IMPLAN, Torreon, progreso, sustentabilidad, industria, medio, ambiente';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CoahuilaHaciaElEquilibrioDeProgresoYSustentabilidadEnConstruccion.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente');
        $this->fuentes                    = array('SEMARNAT');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CoahuilaHaciaElEquilibrioDeProgresoYSustentabilidadEnConstruccion

?>
