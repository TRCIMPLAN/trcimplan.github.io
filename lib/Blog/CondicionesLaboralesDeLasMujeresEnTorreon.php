<?php
/**
 * TrcIMPLAN Sitio Web - Comportamiento y tendencia de la incidencia delictiva. Una visión ampliada.
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
 * Clase ComportamientoTendenciaIncidenciaDelictiva
 */
class CondicionesLaboralesDeLasMujeresEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Condiciones laborales de las mujeres en Torreón.';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2018-03-09T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'condiciones-laborales-de-las-mujeres-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'De acuerdo con INEGI aunque las mujeres trabajan, lo hacen por menos tiempo que los hombres, tienen un salario menor y además, tienen un acceso más restringido a prestaciones laborales. De las trabajadoras en Torreón, un 34% no tiene acceso a instituciones de salud y un 15% no tiene otras prestaciones.';
        $this->claves                     = 'IMPLAN, Torreon, Genero, Empleo, Mujer';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CondicionesLaboralesDeLasMujeresEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Empleo', 'Genero');
        $this->fuentes                    = array('Encuesta Nacional de Ocupación y Empleo','INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComportamientoTendenciaIncidenciaDelictiva

?>
