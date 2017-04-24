<?php
/**
 * TrcIMPLAN Sitio Web - Convocatoria del Plan Estratégico Metropolitano
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
 * Clase PlanEstrategicoMetropolitano20140911
 */
class PlanEstrategicoMetropolitano20140911 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Convocatoria del Plan Estratégico Metropolitano';
    //  $this->autor                      = '';
        $this->fecha                      = '2014-09-11T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2014-09-11-plan-estrategico-metropolitano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Plan Estratégico Metropolitano es un esfuerzo de planeación participativa que encabeza el Consejo Directivo del IMPLAN Torreón, para atender la necesidad urgente de elevar el nivel de competitividad para el desarrollo económico y social de la Zona Metropolitana de La Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, Plan, Estrategico, Metropolitano, Convocatoria';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/SalaPrensa/PlanEstrategicoMetropolitano20140911.html';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PlanEstrategicoMetropolitano20140911

?>
