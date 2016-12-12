<?php
/**
 * TrcIMPLAN Sitio Web - IMPLAN organiza taller para fortalecer el Clúster Salud en La Laguna
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * @package TrcIMPLAN
 */

namespace SalaPrensa;

/**
 * Clase PlanEstrategicoMetropolitanoSaludLaguna
 */
class PlanEstrategicoMetropolitanoSaludLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN organiza taller para fortalecer el Clúster Salud en La Laguna';
    //  $this->autor                      = '';
        $this->fecha                      = '2015-08-14T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-08-14-plan-estrategico-metropolitano-salud-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se ha convocado a hospitales y clínicas públicas y privadas, colegios, asociaciones e institutos de investigación médica, técnicos del área de salud, universidades con carreras en el área de salud, instituciones públicas del sector salud y proveedores de servicios e insumos médicos.';
        $this->claves                     = 'IMPLAN, Torreon, Salud, Laguna, Medicos, Hospitales, Clinicas, Investigacion';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/PlanEstrategicoMetropolitanoSaludLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase PlanEstrategicoMetropolitanoSaludLaguna

?>
