<?php
/**
 * TrcIMPLAN Sitio Web - ProgramasEducativosAlcancesYEfectos
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
 * Clase ProgramasEducativosAlcancesYEfectos
 */
class ProgramasEducativosAlcancesYEfectos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Programas Educativos: Alcances y Efectos';
        $this->autor                      = 'Lic. Edgardo de la Cruz Torres';
        $this->fecha                      = '2022-09-19T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'programas-educativos-sep-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Resulta recomendable que las decisiones públicas se tomen con base en evidencia, que surjan de un diagnóstico objetivo y permitan trazar una eficaz ruta de seguimiento y evaluación.';
        $this->claves                     = 'IMPLAN, Torreon, educacion, programas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ProgramasEducativosAlcancesYEfectos.md';
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('CONEVAL');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ProgramasEducativosAlcancesYEfectos

?>
