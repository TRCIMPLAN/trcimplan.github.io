<?php
/**
 * TrcIMPLAN Sitio Web - PresupuestoParticipativoEnLaComarcaLagunera
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
 * Clase PresupuestoParticipativoEnLaComarcaLagunera
 */
class PresupuestoParticipativoEnLaComarcaLagunera extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Presupuesto Participativo en la Comarca Lagunera';
        $this->autor                      = 'Lic. Gilberto Eduardo Ríos Buendía';
        $this->fecha                      = '2022-11-28T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'presupuesto-participativo-en-la-comarca-nov-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Presupuesto Participativo es un mecanismo mediante el cual la ciudadanía, por medio de las asambleas ciudadanas o juntas de vecinos que existan, eligen y definen los proyectos, bajo la administración, ejecución y responsabilidad de las autoridades municipales, es un proceso de intervención directa, permanente, voluntaria y universal mediante el cual la población, conjuntamente con el gobierno, delibera y decide la asignación de recursos públicos, básicamente, la ciudadanía elige en qué se gastará parte del presupuesto.';
        $this->claves                     = 'IMPLAN, Torreon, presupuesto, recursos, publico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PresupuestoParticipativoEnLaComarcaLagunera.md';
        // Para el Organizador
        $this->categorias                 = array('Participación Ciudadana');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PresupuestoParticipativoEnLaComarcaLagunera

?>
