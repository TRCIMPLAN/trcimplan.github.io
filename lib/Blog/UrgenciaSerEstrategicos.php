<?php
/**
 * TrcIMPLAN Sitio Web - La urgencia de ser estratégicos
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
 * Clase UrgenciaSerEstrategicos
 */
class UrgenciaSerEstrategicos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La urgencia de ser estratégicos';
        $this->autor                      = 'Arq. Victoria Aranzábal';
        $this->fecha                      = '2014-12-09T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'urgencia-ser-estrategicos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El futuro tiene cada vez más peso en las decisiones presentes, traer los probables escenarios futuros al presente nos pide innovar, ser más creativos y también nos invita a ser urgentes.';
        $this->claves                     = 'IMPLAN, Torreon, Plan Estrategico Metropolitano, Futuro';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UrgenciaSerEstrategicos.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase UrgenciaSerEstrategicos

?>
