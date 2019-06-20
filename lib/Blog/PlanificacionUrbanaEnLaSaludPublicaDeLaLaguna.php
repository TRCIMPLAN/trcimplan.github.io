<?php
/**
 * TrcIMPLAN Sitio Web - PlanificacionUrbanaEnLaSaludPublicaDeLaLaguna
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
 * Clase PlanificacionUrbanaEnLaSaludPublicaDeLaLaguna
 */
class PlanificacionUrbanaEnLaSaludPublicaDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La planificación urbana, fundamental en la salud pública de los laguneros.';
        $this->autor                      = 'Arq. Julio Alexis Magaña Cisneros';
        $this->fecha                      = '2019-06-20T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'planificacion-urbana-en-la-salud-publica-de-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El entorno construido, el acceso a los servicios sociales, la conexión de la vida urbana, el diseño que  muchas veces opta por la estética o se genera teniendo como modelo el automóvil, entre otros factores, generan condiciones que afectan directamente a la Salud Pública: enfermedades, contaminación, la violencia y los asentamientos irregulares son solo algunos de los problemas que se viven en las poblaciones  y tanto urbanas como rurales padecen de estos.';
        $this->claves                     = 'IMPLAN, Torreon, planificacion urbana, salud publica';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PlanificacionUrbanaEnLaSaludPublicaDeLaLaguna.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Salud', 'Servicios Públicos');
        $this->fuentes                    = array('OMS','IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PlanificacionUrbanaEnLaSaludPublicaDeLaLaguna

?>
